<?php

use App\Models\Operational\Doctor;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

// Simulate a request
$file = UploadedFile::fake()->image('doctor.jpg');

$data = [
    'user_id' => 1,
    'specialist_id' => 1,
    'name' => 'Test Doctor',
    'fee' => 'IDR 100,000',
    'photo' => $file,
];

// Mock the controller logic
$data['fee'] = str_replace(',', '', $data['fee']);
$data['fee'] = str_replace('IDR ', '', $data['fee']);

if (isset($data['photo'])) {
    $data['photo'] = $data['photo']->store('assets/file-doctor', 'public');
}

echo "Stored path: " . $data['photo'] . "\n";

// Check if file exists
if (Storage::disk('public')->exists($data['photo'])) {
    echo "File exists in storage/app/public/" . $data['photo'] . "\n";
} else {
    echo "File DOES NOT exist in storage/app/public/" . $data['photo'] . "\n";
}
