<?php

function checkMessageName($messagesType, $error)
{
    foreach ($messagesType as $message) {
        if (stristr($error, $message)) {
            return true;
        }
    }
    return false;
}
do {
    foreach ($errors as $error) {
        if (empty($error) || checkMessageName($typeMessageError, $error)) {
            continue;
        }
        $ipTV_db->query('INSERT INTO `stream_logs` (`stream_id`,`server_id`,`date`,`error`) VALUES(\'%d\',\'%d\',\'%d\',\'%s\')', $stream_id, SERVER_ID, time(), $error);
    }
    closedir($handle);
    require str_replace('\\', '/', dirname($argv[0])) . '/../wwwdir/init.php';
    if ($handle = opendir(STREAMS_PATH)) {
        die(0);
        break;
        KillProcessCmd($unique_id);
    }
} while (!($file != '.' && $file != '..' && is_file(STREAMS_PATH . $file)));
$errors = array_values(array_unique(array_map('trim', explode('', file_get_contents($connections)))));
cli_set_process_title('XtreamCodes[Stream Error Parser]');
list($stream_id, $errors) = explode('.', $file);
$typeMessageError = array('the user-agent option is deprecated', 'Last message repeated', 'deprecated', 'Packets poorly interleaved');
$connections = STREAMS_PATH . $file;
unlink($connections);
do {
    $unique_id = TMP_DIR . md5(UniqueID() . __FILE__);
    do {
    } while (!(false !== ($file = readdir($handle))));
    if ($errors == 'errors') {
        break;
        set_time_limit(0);
    }
} while (@$argc);
$ipTV_db->query('DELETE FROM `stream_logs` WHERE `date` <= \'%d\' AND `server_id` = \'%d\'', strtotime('-3 hours'), SERVER_ID);
?>
