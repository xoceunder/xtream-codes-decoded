<?php

function B59f12aD3c67D06C7d816CCE0857A9c0($segmentList)
{
    global $E24f60f7b980e94775d1c9804fa34f3c;
    if (!empty($segmentList)) {
        $d76067cf9572f7a6691c85c12faf2a29 = '';
        foreach ($segmentList as $segment) {
            $d76067cf9572f7a6691c85c12faf2a29 .= '#EXTINF:' . $segment['seconds'] . ',
' . $segment['file'] . '
';
        }
        file_put_contents($E24f60f7b980e94775d1c9804fa34f3c, $d76067cf9572f7a6691c85c12faf2a29, LOCK_EX);
    } else {
        unlink($E24f60f7b980e94775d1c9804fa34f3c);
    }
}
function e4A17039c7e2bF3AEf24682E95596200($timestamp)
{
    global $stream_id;
    if (file_exists(STREAMS_PATH . $stream_id . '_' . $timestamp . '.ts')) {
        unlink(STREAMS_PATH . $stream_id . '_' . $timestamp . '.ts');
    }
}
function a004966a0490316174410F9d02e551Cc($stream_id)
{
    clearstatcache(true);
    if (file_exists('/home/xtreamcodes/iptv_xtream_codes/streams/' . $stream_id . '.monitor_delay')) {
        $pid = intval(file_get_contents('/home/xtreamcodes/iptv_xtream_codes/streams/' . $stream_id . '.monitor_delay'));
    }
    if (!empty($pid)) {
        if (file_exists('/proc/' . $pid)) {
            $name = trim(file_get_contents('/proc/' . $pid . '/cmdline'));
            if ($name == 'XtreamCodesDelay[' . $stream_id . ']') {
                posix_kill($pid, 9);
            }
        } else {
            shell_exec('kill -9 `ps -ef | grep \'XtreamCodesDelay\\[' . $stream_id . '\\]\' | grep -v grep | awk \'{print $2}\'`;');
        }
        file_put_contents('/home/xtreamcodes/iptv_xtream_codes/streams/' . $stream_id . '.monitor_delay', getmypid());
    }
}
function Segments($m3uFile, &$segment_list, $total_segments)
{
    $segments = array();
    if (!empty($segment_list)) {
        $segmentItem = array_shift($segment_list);
        unlink(DELAY_STREAM . $segmentItem['file']);
        $i = 0;
        while ($i < $total_segments && $i < count($segment_list)) {
            $segments[] = $segment_list[$i];
            $i++;
        }
        $segment_list = array_values($segment_list);
        $segmentItem = array_shift($segment_list);
        b59f12ad3c67d06c7d816cce0857a9c0($segment_list);
    }
    if (file_exists($m3uFile)) {
        $segments = array_merge($segments, C2C6381b9cB137Fe8E0c902B6580806b($m3uFile, $total_segments - count($segments)));
    }
    return $segments;
}
function C2C6381b9cB137Fe8E0c902B6580806B($playlist, $A029b77634bf5f67a52c7d5b31aed706 = 0)
{
    $segments = array();
    if (file_exists($playlist)) {
        $fp = fopen($playlist, 'r');
        while (!feof($fp)) {
            if (count($segments) == $A029b77634bf5f67a52c7d5b31aed706) {
                break;
            }
            $bb85be39ea05b75c9bffeff236bd9355 = trim(fgets($fp));
            if (stristr($bb85be39ea05b75c9bffeff236bd9355, 'EXTINF')) {
                list($C76b30d7f4bca2add414f0f3f81feb56, $seconds) = explode(':', $bb85be39ea05b75c9bffeff236bd9355);
                $seconds = rtrim($seconds, ',');
                $file = trim(fgets($fp));
                if (file_exists(DELAY_STREAM . $file)) {
                    $segments[] = array('seconds' => $seconds, 'file' => $file);
                }
            }
        }
        fclose($fp);
    }
    return $segments;
}
if (!@$argc) {
    if (!empty($m3u['segments'])) {
        $segment_list = C2C6381B9cB137fe8e0C902B6580806b($E24f60f7b980e94775d1c9804fa34f3c, -1);
        $streamsSys = $ipTV_db->get_row();
        if (!($argc <= 2)) {
            usleep(5000);
            foreach ($m3u['vars'] as $Baee0c34e5755f1cfaa4159ea7e8702e => $F825e5509b5b7d124881b85978e1cd5b) {
                $d76067cf9572f7a6691c85c12faf2a29 .= !empty($F825e5509b5b7d124881b85978e1cd5b) ? $Baee0c34e5755f1cfaa4159ea7e8702e . ':' . $F825e5509b5b7d124881b85978e1cd5b . '
' : $Baee0c34e5755f1cfaa4159ea7e8702e . '
';
            }
            $ipTV_db->query('UPDATE `streams_sys` SET delay_pid = \'%d\' WHERE stream_id = \'%d\' AND server_id = \'%d\'', getmypid(), $stream_id, SERVER_ID);
            $Bdc1c8e2b3e276254f5bac32b7c43966 = md5(file_get_contents($m3uFile));
            $m3u = array('vars' => array('#EXTM3U' => '', '#EXT-X-VERSION' => 3, '#EXT-X-MEDIA-SEQUENCE' => '0', '#EXT-X-ALLOW-CACHE' => 'YES', '#EXT-X-TARGETDURATION' => ipTV_lib::$SegmentsSettings['seg_time']), 'segments' => array());
            foreach ($m3u['segments'] as $fe9d0d199fc51f64065055d8bcade279) {
                copy(DELAY_STREAM . $fe9d0d199fc51f64065055d8bcade279['file'], STREAMS_PATH . $fe9d0d199fc51f64065055d8bcade279['file']);
                $d76067cf9572f7a6691c85c12faf2a29 .= '#EXTINF:' . $fe9d0d199fc51f64065055d8bcade279['seconds'] . ',
' . $fe9d0d199fc51f64065055d8bcade279['file'] . '
';
            }
            e4a17039c7e2bf3aef24682e95596200($dc74996ad998dff0c7193a827d43d36f - 2);
            die;
            $dc74996ad998dff0c7193a827d43d36f = 0;
        } else {
            $ipTV_db->query('SELECT * FROM `streams` t1 INNER JOIN `streams_sys` t2 ON t2.stream_id = t1.id AND t2.server_id = \'%d\' WHERE t1.id = \'%d\'', SERVER_ID, $stream_id);
            $total_segments = intval(ipTV_lib::$SegmentsSettings['seg_list_size']);
            A004966a0490316174410F9D02E551CC($stream_id);
            $f4cb2e0f4f9d3070cea6104f839ddf0c = md5(file_get_contents($m3uFile));
            $m3u['vars']['#EXT-X-MEDIA-SEQUENCE'] = $dc74996ad998dff0c7193a827d43d36f;
            $segment_list = array();
            define('FETCH_BOUQUETS', false);
            $b1f097c3b9a5a23f95acaf353ae812eb = STREAMS_PATH . $stream_id . '_.m3u8';
            $pid = file_exists(STREAMS_PATH . $stream_id . '_.pid') ? intval(file_get_contents(STREAMS_PATH . $stream_id . '_.pid')) : $streamsSys['pid'];
            $ipTV_db->close_mysql();
            file_put_contents($b1f097c3b9a5a23f95acaf353ae812eb, $d76067cf9572f7a6691c85c12faf2a29, LOCK_EX);
            die(0);
            $a46370e74305dba2a4f93f7112912d5f = '';
            do {
                do {
                    if (file_exists($E24f60f7b980e94775d1c9804fa34f3c)) {
                        break;
                        shell_exec('find ' . DELAY_STREAM . $stream_id . '_*' . (' -type f -cmin +' . $delay_minutes . ' -delete'));
                        cli_set_process_title('XtreamCodesDelay[' . $stream_id . ']');
                        do {
                            set_time_limit(0);
                            $f4cb2e0f4f9d3070cea6104f839ddf0c = $Bdc1c8e2b3e276254f5bac32b7c43966;
                            $d76067cf9572f7a6691c85c12faf2a29 = '';
                        } while (!preg_match('/.*\\_(.*?)\\.ts/', $m3u['segments'][0]['file'], $ae37877cee3bc97c8cfa6ec5843993ed));
                        $E24f60f7b980e94775d1c9804fa34f3c = DELAY_STREAM . $stream_id . '_.m3u8_old';
                        $m3u = array();
                        do {
                            die;
                            echo '[*] Correct Usage: php ' . __FILE__ . ' <stream_id> [minutes]
';
                        } while (!(ipTV_streaming::CheckPidChannelM3U8Exist($pid, $stream_id) && file_exists($m3uFile)));
                        do {
                        } while (!($streamsSys['delay_minutes'] == 0 || $streamsSys['parent_id'] != 0));
                        $dc74996ad998dff0c7193a827d43d36f = intval($ae37877cee3bc97c8cfa6ec5843993ed[1]);
                        $stream_id = intval($argv[1]);
                        $m3uFile = DELAY_STREAM . $stream_id . '_.m3u8';
                    }
                } while (!($ipTV_db->num_rows() <= 0));
                $minutes = intval(abs($argv[2]));
                $pid = $streamsSys['delay_pid'];
                require str_replace('\\', '/', dirname($argv[0])) . '/../wwwdir/init.php';
                $m3u['segments'] = Segments($m3uFile, $segment_list, $total_segments);
                die;
                $Bdc1c8e2b3e276254f5bac32b7c43966 = 0;
            } while (!($f4cb2e0f4f9d3070cea6104f839ddf0c != $Bdc1c8e2b3e276254f5bac32b7c43966));
            $delay_minutes = $streamsSys['delay_minutes'] + 5;
        }
    }
}
?>
