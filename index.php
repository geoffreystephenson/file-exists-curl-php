$ch = curl_init($image_path);
curl_setopt($ch, CURLOPT_NOBODY, true);
curl_exec($ch);
$retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$size = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
curl_close($ch);

// $retcode = 200 = found
// $retcode > 400 = not found
// $size = file size in bytes
