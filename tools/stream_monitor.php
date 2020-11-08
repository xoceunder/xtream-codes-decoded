<?php

function A004966A0490316174410f9d02E551cc($stream_id)
{
    clearstatcache(true);
    if (file_exists('/home/xtreamcodes/iptv_xtream_codes/streams/' . $stream_id . '.monitor')) {
        $pid = intval(file_get_contents('/home/xtreamcodes/iptv_xtream_codes/streams/' . $stream_id . '.monitor'));
    }
    if (!empty($pid)) {
        if (file_exists('/proc/' . $pid)) {
            $name = trim(file_get_contents('/proc/' . $pid . '/cmdline'));
            if ($name == 'XtreamCodes[' . $stream_id . ']') {
                posix_kill($pid, 9);
            }
        } else {
            shell_exec('kill -9 `ps -ef | grep \'XtreamCodes\\[' . $stream_id . '\\]\' | grep -v grep | awk \'{print $2}\'`;');
        }
        file_put_contents('/home/xtreamcodes/iptv_xtream_codes/streams/' . $stream_id . '.monitor', getmypid());
    }
}
ipTV_stream::stopStream($stream_id);
require str_replace('\\', '/', dirname($argv[0])) . '/../wwwdir/init.php';
if (is_numeric($d76067cf9572f7a6691c85c12faf2a29) && $d76067cf9572f7a6691c85c12faf2a29 == 0) {
    if (!empty($AutoRestart['days']) && !empty($AutoRestart['at'])) {
        shell_exec('kill -9 ' . $pid);
        sleep(1);
        if ($delayIsEnabled && ipTV_streaming::CheckPidStreamExist($pid, $stream_id)) {
            if (ipTV_streaming::CheckPidChannelM3U8Exist($pid, $stream_id) && file_exists($playlist)) {
                shell_exec('rm -f ' . STREAMS_PATH . $stream_id . '_*');
                echo '[*] Correct Usage: php ' . __FILE__ . ' <stream_id> [restart]
';
                if (!$delayIsEnabled) {
                    if (ipTV_lib::$SegmentsSettings['seg_time'] * 6 <= time() - $f22b7f23bbbdae3df06477aed82a151c) {
                        sleep(mt_rand(5, 10));
                        $E58daa5817b41e5a33cecae880e2ee63 = md5_file($playlist);
                        if ($a88c8d86d7956601164a5f156d5df985 == ipTV_lib::$SegmentsSettings['seg_time'] * 3) {
                            die;
                            shell_exec('kill -9 ' . $pid);
                            if (!(isset($E40539dbfb9861abbd877a2ee47b9e65['codecs']['audio']) && !empty($E40539dbfb9861abbd877a2ee47b9e65['codecs']['audio']))) {
                                $sources = array();
                                if (in_array(date('l'), $AutoRestart['days']) && date('H') == $Ed62709841469f20fe0f7a17a4268692) {
                                    usleep(50000);
                                    $stream_path = STREAMS_PATH;
                                    $playlist = $d76067cf9572f7a6691c85c12faf2a29['playlist'];
                                    $ebfa28a30329e00587855f3e760c1e8d = $f22b7f23bbbdae3df06477aed82a151c = $bd0f38b3825862e8c62737eefa67a742 = time();
                                    if (!(0 < $streamsSys['delay_minutes'] && $streamsSys['parent_id'] == 0)) {
                                        $c6a482793047d2f533b0b69299b7d24d = empty($argv[2]) ? false : true;
                                        if ($argc <= 1) {
                                            if ($ipTV_db->num_rows() <= 0) {
                                                sleep(1);
                                                $playlist = STREAMS_PATH . $stream_id . '_.m3u8';
                                                usleep(50000);
                                                $rows = $ipTV_db->get_rows();
                                                sleep(mt_rand(10, 25));
                                                foreach ($sources as $source) {
                                                    $sourceURL = ipTV_stream::ParseStreamURL($source);
                                                    if ($sourceURL == $source) {
                                                        break;
                                                    }
                                                    $protocol = strtolower(substr($sourceURL, 0, strpos($sourceURL, '://')));
                                                    $ArgumentsList = implode(' ', ipTV_stream::GetArguments($rows, $protocol, 'fetch'));
                                                    if ($stream_info = ipTV_stream::GetStreamInfo($sourceURL, SERVER_ID, $ArgumentsList)) {
                                                        $prioritySource = $sourceURL;
                                                        break;
                                                    }
                                                }
                                                list($fe9d0d199fc51f64065055d8bcade279) = ipTV_streaming::GetSegmentsOfPlaylist($playlist, 10);
                                                $delayIsEnabled = true;
                                                die(0);
                                                $Baee0c34e5755f1cfaa4159ea7e8702e = array_search($source, $sources);
                                                if (ipTV_streaming::CheckPidChannelM3U8Exist($pid, $stream_id)) {
                                                    $ecae69bb74394743482337ade627630b = 0;
                                                    if (!($parent_id == 0)) {
                                                        $prioritySource = NULL;
                                                        if ($d76067cf9572f7a6691c85c12faf2a29 === false) {
                                                            $source = $streamsSys['current_source'];
                                                            echo 'Checking For PlayList...
';
                                                            $pid = $streamsSys['delay_pid'];
                                                            $delayIsEnabled = $d76067cf9572f7a6691c85c12faf2a29['delay_enabled'];
                                                            ++$a88c8d86d7956601164a5f156d5df985;
                                                            if (ipTV_lib::$settings['priority_backup'] == 1 && 1 < count($sources) && $parent_id == 0 && 10 < time() - $bd0f38b3825862e8c62737eefa67a742) {
                                                                $pid = $d76067cf9572f7a6691c85c12faf2a29['main_pid'];
                                                                $stream_path = DELAY_STREAM;
                                                                die;
                                                                shell_exec('rm -f ' . STREAMS_PATH . $stream_id . '_*');
                                                                cli_set_process_title('XtreamCodes[' . $stream_id . ']');
                                                                $stream_path = STREAMS_PATH;
                                                                do {
                                                                    shell_exec('kill -9 ' . $pid);
                                                                    if (!false) {
                                                                        break;
                                                                        $stream_path = DELAY_STREAM;
                                                                        usleep(50000);
                                                                        shell_exec('kill -9 ' . $pid);
                                                                        $AutoRestart = json_decode($streamsSys['auto_restart'], true);
                                                                        $parent_id = $streamsSys['parent_id'];
                                                                    }
                                                                } while (!ipTV_streaming::CheckPidStreamExist($pid, $stream_id));
                                                                $pid = intval(shell_exec(PHP_BIN . ' ' . TOOLS_PATH . 'delay.php ' . $stream_id . ' ' . $streamsSys['delay_minutes'] . ' >/dev/null 2>/dev/null & echo $!'));
                                                                $ebfa28a30329e00587855f3e760c1e8d = time();
                                                                shell_exec('kill -9 ' . $pid);
                                                                do {
                                                                    do {
                                                                    } while (!($minutes == date('i')));
                                                                    $bd0f38b3825862e8c62737eefa67a742 = time();
                                                                    do {
                                                                    } while (!(ipTV_lib::$settings['audio_restart_loss'] == 1 && 300 < time() - $ebfa28a30329e00587855f3e760c1e8d));
                                                                    $parent_id = $d76067cf9572f7a6691c85c12faf2a29['parent_id'];
                                                                    $ecae69bb74394743482337ade627630b = 0;
                                                                    a004966a0490316174410f9d02e551cc($stream_id);
                                                                    $stream_id = intval($argv[1]);
                                                                    do {
                                                                    } while (!(RESTART_TAKE_CACHE < $ecae69bb74394743482337ade627630b));
                                                                    $ipTV_db->query('SELECT * FROM `streams` t1 INNER JOIN `streams_sys` t2 ON t2.stream_id = t1.id AND t2.server_id = \'%d\' WHERE t1.id = \'%d\'', SERVER_ID, $stream_id);
                                                                    $ipTV_db->query('SELECT t1.*, t2.* FROM `streams_options` t1, `streams_arguments` t2 WHERE t1.stream_id = \'%d\' AND t1.argument_id = t2.id', $stream_id);
                                                                    do {
                                                                    } while (!empty($fe9d0d199fc51f64065055d8bcade279));
                                                                    $ipTV_db->close_mysql();
                                                                    usleep(50000);
                                                                    define('FETCH_BOUQUETS', false);
                                                                    $delayIsEnabled = false;
                                                                    do {
                                                                        $source = $d76067cf9572f7a6691c85c12faf2a29['stream_source'];
                                                                        $E40539dbfb9861abbd877a2ee47b9e65 = ipTV_stream::GetStreamInfo($stream_path . $fe9d0d199fc51f64065055d8bcade279, SERVER_ID);
                                                                        $pid = $pid = 0;
                                                                        $a88c8d86d7956601164a5f156d5df985 = 0;
                                                                        do {
                                                                        } while (ipTV_streaming::CheckPidChannelM3U8Exist($pid, $stream_id));
                                                                        $f647227394deda82f51d6cad920a8c8c = $E58daa5817b41e5a33cecae880e2ee63;
                                                                        do {
                                                                        } while (@$argc);
                                                                        do {
                                                                        } while (!(0 < $pid));
                                                                        $streamsSys['delay_available_at'] = $d76067cf9572f7a6691c85c12faf2a29['delay_start_at'];
                                                                        do {
                                                                        } while (!(ipTV_streaming::CheckPidChannelM3U8Exist($pid, $stream_id) && !file_exists($playlist) && $a88c8d86d7956601164a5f156d5df985 <= ipTV_lib::$SegmentsSettings['seg_time'] * 3));
                                                                        do {
                                                                        } while (!($delayIsEnabled && $streamsSys['delay_available_at'] <= time() && !ipTV_streaming::CheckPidStreamExist($pid, $stream_id)));
                                                                    } while (!(0 < $Baee0c34e5755f1cfaa4159ea7e8702e));
                                                                    $playlist = DELAY_STREAM . $stream_id . '_.m3u8';
                                                                    $ipTV_db->CC637bcB0B74b82BeBC2776607e73BEd();
                                                                    echo 'Restarting...';
                                                                    list($Ed62709841469f20fe0f7a17a4268692, $minutes) = explode(':', $AutoRestart['at']);
                                                                    $streamsSys = $ipTV_db->get_row();
                                                                    set_time_limit(0);
                                                                    if (!ipTV_streaming::CheckPidChannelM3U8Exist($pid, $stream_id)) {
                                                                    } else {
                                                                        $prioritySource = NULL;
                                                                        $pid = file_exists(STREAMS_PATH . $stream_id . '_.pid') ? intval(file_get_contents(STREAMS_PATH . $stream_id . '_.pid')) : $streamsSys['pid'];
                                                                        break;
                                                                        $f22b7f23bbbdae3df06477aed82a151c = time();
                                                                        $d76067cf9572f7a6691c85c12faf2a29 = ipTV_stream::cebEeE6A9c20E0da24C41A0247cF1244($stream_id, $ecae69bb74394743482337ade627630b, $prioritySource);
                                                                        do {
                                                                        } while ($f647227394deda82f51d6cad920a8c8c != $E58daa5817b41e5a33cecae880e2ee63);
                                                                        die;
                                                                        $ipTV_db->query('UPDATE `streams_sys` SET `monitor_pid` = \'%d\' WHERE `server_stream_id` = \'%d\'', getmypid(), $streamsSys['server_stream_id']);
                                                                    }
                                                                } while (!$c6a482793047d2f533b0b69299b7d24d);
                                                                $sources = json_decode($streamsSys['stream_source'], true);
                                                                $ecae69bb74394743482337ade627630b = RESTART_TAKE_CACHE + 1;
                                                            }
                                                        }
                                                    } else {
                                                        $f647227394deda82f51d6cad920a8c8c = md5_file($playlist);
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
?>
