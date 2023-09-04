<?php
$jsonFile = 'result.json';
$data = json_decode(file_get_contents($jsonFile), true);

$messagesSent = $messagesReceived = $charactersSent = $charactersReceived = 0;
$wordCount = [];

foreach ($data['messages'] as $message) {
    $sender = $message['from'];
    $messageLength = mb_strlen($message['text']);

    if ($sender === 'Bot') {
        $messagesSent++; $charactersSent += $messageLength;
        foreach (str_word_count($message['text'], 1) as $word) $wordCount[strtolower($word)]++;
    } else {
        $messagesReceived++; $charactersReceived += $messageLength;
    }
}

arsort($wordCount);
$top5Words = array_slice($wordCount, 0, 5);

echo "Top 5 Words: " . json_encode($top5Words) . "\n";
echo "Messages Sent: $messagesSent\n";
echo "Messages Received: $messagesReceived\n";
echo "Avg Char Sent: " . ($messagesSent > 0 ? $charactersSent / $messagesSent : 0) . "\n";
echo "Avg Char Received: " . ($messagesReceived > 0 ? $charactersReceived / $messagesReceived : 0) . "\n";
?>






<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script> -->
