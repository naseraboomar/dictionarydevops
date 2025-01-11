<?php
include 'db.php'; // الاتصال بقاعدة البيانات

$word = "";
$meaning = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $word = $_POST['word'];
    $stmt = $conn->prepare("SELECT meaning FROM words WHERE word = ?");
    $stmt->bind_param("s", $word);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $meaning = $row['meaning'];
    } else {
        $meaning = "Word not found in the dictionary.";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Dictionary</title>
</head>
<body>
    <h1>Simple Dictionary</h1>
    <form method="post" action="">
        <label for="word">Enter a word:</label>
        <input type="text" id="word" name="word" required>
        <button type="submit">Search</button>
    </form>
    <h2>Meaning:</h2>
    <p><?= htmlspecialchars($meaning) ?></p>
</body>
</html>
