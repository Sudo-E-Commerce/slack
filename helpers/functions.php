<?php

/**
 * Thực hiện gửi Slack.
 * @param string    $message: Tin nhắn muốn gửi
 * @param string    $webhook: Link webhook lấy từ API của Slack
 */
function slackText($message, $webhook) {
    $slack = new \Sudo\Slack\Models\Slack($webhook);
    $slack->notify(new \Sudo\Slack\Notifications\SlackText($message));
}