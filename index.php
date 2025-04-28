<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="r.png">
    <title>Rico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            text-align: left;
            background-color: #f5f5f5;
            padding: 10px;
            font-weight: normal;
            border-bottom: 1px solid #ddd;
        }
        th a {
            text-decoration: none;
            color: #333;
        }
        th a .icon-sort {
            margin-left: 5px;
            font-size: 12px;
            color: #888;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
        .icon {
            margin-right: 10px;
        }
        .folder::before {
            content: "📁";
        }
        .file::before {
            content: "🟨";
        }
        a {
            text-decoration: none;
            color: #333;
        }
        a:hover {
            text-decoration: underline;
        }
        .breadcrumb {
            margin-bottom: 20px;
            font-size: 14px;
            color: #666;
        }
        .breadcrumb a {
            color: #0073aa;
        }
    </style>
    <style>
    .header {
        background-color: #e0f7fa;
        padding: 20px;
        text-align: center;
        border-radius: 10px;
        margin-bottom: 30px;
        color: #006064;
    }
    .header h1 {
        margin: 0;
        font-size: 32px;
        font-weight: bold;
    }
    .header p {
        margin: 5px 0 0;
        font-size: 16px;
    }
    .footer {
        margin-top: 40px;
        padding: 15px;
        text-align: center;
        background-color: #eceff1;
        color: #607d8b;
        font-size: 14px;
        border-radius: 10px;
    }
</style>
<style>
    .github-button {
        display: inline-block;
        margin-top: 15px;
        padding: 10px 20px;
        background-color: #eceff1;
        color: #006064;
        border: 1px solid #b0bec5;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s, color 0.3s;
        font-size: 14px;
    }
    .github-button:hover {
        background-color: #cfd8dc;
        color: #004d40;
    }
    .github-icon {
        margin-right: 8px;
        font-size: 18px;
        vertical-align: middle;
    }
</style>

</head>
<body>
<header class="header">
    <h1>📂 File Manager - Aplikasi Berbasis Web</h1>
    <p>Nama: <strong>Rico Ardi Saputra</strong> | NIM: <strong>202421021P</strong></p>
    <a class="github-button" href="https://github.com/ricoardi/aplikasi-berbasis-web" target="_blank">
        <span class="github-icon">🐙</span> Lihat di GitHub
    </a>
</header>
<?php
$baseDir = realpath(__DIR__);
$currentDir = isset($_GET['dir']) ? realpath($_GET['dir']) : $baseDir;

if ($currentDir === false || strpos($currentDir, $baseDir) !== 0) {
    $currentDir = $baseDir;
}

$relativePath = trim(str_replace($baseDir, '', $currentDir), DIRECTORY_SEPARATOR);
$breadcrumbs = $relativePath ? explode(DIRECTORY_SEPARATOR, $relativePath) : [];
$breadcrumbPath = $baseDir;

echo "<div class='breadcrumb'>📂 ";
echo "<a href='?'>" . basename($baseDir) . "</a>";
foreach ($breadcrumbs as $crumb) {
    $breadcrumbPath .= DIRECTORY_SEPARATOR . $crumb;
    echo " &gt; <a href='?dir=" . urlencode($breadcrumbPath) . "'>$crumb</a>";
}
echo "</div>";

$sort = $_GET['sort'] ?? 'name';
$order = $_GET['order'] ?? 'asc';

function formatBytes($bytes) {
    if ($bytes >= 1048576) return round($bytes / 1048576, 2) . ' MiB';
    if ($bytes >= 1024) return round($bytes / 1024, 2) . ' KiB';
    if ($bytes > 0) return $bytes . ' B';
    return '-';
}

function timeAgo($time) {
    $diff = time() - $time;
    if ($diff >= 2592000) return "sebulan yang lalu";
    elseif ($diff >= 86400) return floor($diff / 86400) . " hari yang lalu";
    elseif ($diff >= 3600) return floor($diff / 3600) . " jam yang lalu";
    elseif ($diff >= 60) return floor($diff / 60) . " menit yang lalu";
    else return "baru saja";
}

function sortUrl($column, $currentSort, $currentOrder, $currentDir) {
    $nextOrder = ($column === $currentSort && $currentOrder === 'asc') ? 'desc' : 'asc';
    $url = "?sort=$column&order=$nextOrder";
    if ($currentDir && $currentDir !== realpath(__DIR__)) {
        $url .= "&dir=" . urlencode($currentDir);
    }
    return $url;
}

function sortIcon($column, $currentSort, $currentOrder) {
    if ($column !== $currentSort) return '';
    return $currentOrder === 'asc' ? '▲' : '▼';
}

$items = scandir($currentDir);
$data = [];

foreach ($items as $item) {
    if ($item === '.' || $item === '..' || $item === 'index.php' || $item === '.git') continue;

    $fullPath = $currentDir . DIRECTORY_SEPARATOR . $item;
    $isDir = is_dir($fullPath);
    $size = $isDir ? 0 : filesize($fullPath);
    $modified = filemtime($fullPath);

    $data[] = [
        'name' => $item,
        'isDir' => $isDir,
        'size' => $size,
        'modified' => $modified,
        'fullPath' => $fullPath
    ];
}

usort($data, function($a, $b) use ($sort, $order) {
    $valueA = $a[$sort];
    $valueB = $b[$sort];

    if ($sort === 'name') {
        $result = strcasecmp($valueA, $valueB);
    } else {
        $result = $valueA <=> $valueB;
    }

    return $order === 'desc' ? -$result : $result;
});
?>

<table>
    <tr>
        <th><a href="<?= sortUrl('name', $sort, $order, $currentDir) ?>">Nama<span class="icon-sort"><?= sortIcon('name', $sort, $order) ?></span></a></th>
        <th><a href="<?= sortUrl('size', $sort, $order, $currentDir) ?>">Ukuran<span class="icon-sort"><?= sortIcon('size', $sort, $order) ?></span></a></th>
        <th><a href="<?= sortUrl('modified', $sort, $order, $currentDir) ?>">Terakhir diperbarui<span class="icon-sort"><?= sortIcon('modified', $sort, $order) ?></span></a></th>
    </tr>
    <?php foreach ($data as $item): ?>
        <?php
        $class = $item['isDir'] ? 'folder' : 'file';
        $ext = pathinfo($item['name'], PATHINFO_EXTENSION);
        $link = $item['isDir']
            ? "?dir=" . urlencode($item['fullPath'])
            : (in_array($ext, ['php', 'html'])
                ? str_replace($baseDir . DIRECTORY_SEPARATOR, '', $item['fullPath'])
                : null);
        if (!$link) continue;
        ?>
        <tr>
            <td><span class="icon <?= $class ?>"></span><a href="<?= $link ?>"><?= htmlspecialchars($item['name']) ?></a></td>
            <td><?= $item['isDir'] ? '-' : formatBytes($item['size']) ?></td>
            <td><?= timeAgo($item['modified']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<footer class="footer">
    <p>© 2025 Rico Ardi Saputra - All Rights Reserved.</p>
</footer>
</body>
</html>
