<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // ফাইল ইনফো
    $file_name = $_FILES['myfile']['name'];
    $file_tmp = $_FILES['myfile']['tmp_name'];
    $file_size = $_FILES['myfile']['size'];
    $file_error = $_FILES['myfile']['error'];

    // ফাইল এক্সটেনশন
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png', 'pdf', 'docx'];

    if (in_array($file_ext, $allowed)) {
        if ($file_error === 0) {
            if ($file_size < 5 * 1024 * 1024) { // ৫ এমবি
                $new_name = uniqid("FILE_", true) . '.' . $file_ext;
                $destination = 'uploads/' . $new_name;

                if (move_uploaded_file($file_tmp, $destination)) {
                    echo "✅ ফাইল সফলভাবে আপলোড হয়েছে: $new_name";
                } else {
                    echo "❌ ফাইল আপলোডে সমস্যা হয়েছে।";
                }
            } else {
                echo "❌ ফাইলটি অনেক বড়। সর্বোচ্চ ৫ এমবি আপলোড করা যাবে।";
            }
        } else {
            echo "❌ ফাইল আপলোডে এরর হয়েছে। কোড: $file_error";
        }
    } else {
        echo "❌ এই টাইপের ফাইল অনুমোদিত নয়। [jpg, png, pdf, docx]";
    }
}
?>
