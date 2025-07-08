<?php
// 1) ফাইলে লেখা এবং কত বাইট লিখেছে তা ধরে রাখি
$bytes = file_put_contents("data.txt", "Welcome to PHP File Handling!");
echo $bytes . "<br>";          // ➜ "29" (অথবা actual byte‑count) + লাইন‑ব্রেক

// 2) একটি স্ট্রিং প্রিন্ট করা
$data = "this is a test data";
echo $data . "<br>";           // ➜ "this is a test data"

// 3) explode() দিয়ে প্রথম স্পেসের আগের অংশ ও বাকি অংশ আলাদা করা
print_r(explode(" ", $data, 2));
// ➜ Array ( [0] => this [1] => is a test data )
?>
