<?php
declare(strict_types=1);
namespace GiocoPlus\EBET\Contract;
/**
 * eBET 易博真人
 */
interface EBETServiceInterface {

    /**
     * 遊戲啟動
     *
     * @param string $op_code
     * @param string $account
     * @param string $game_code
     * @param string $language
     * @param string $odd_type
     * @return mixed
     */
    function gameLaunch(string $op_code, string $account, string $game_code, string $language, string $odd_type = null);

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $account
     * @param string $bet_id
     * @return mixed
     */
    function gameDetail(string $op_code, string $account, string $bet_id);
}
