
<?php
require __DIR__ . '/includes/functions.php';

header('Content-Type: application/json; charset=utf-8');

$date = $_GET['date'] ?? '';
$date = normalize_date($date);

if ($date === '') {
    echo json_encode(['ok' => false, 'slots' => [], 'error' => 'Invalid date']);
    exit;
}

$slots = get_available_slots($date);
echo json_encode(['ok' => true, 'slots' => $slots]);
