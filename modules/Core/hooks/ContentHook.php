<?php
/*
 *  Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0 pre-13
 *
 *  Content hooks
 */

class ContentHook extends HookBase {

    public static function purify(array $params = []): array {
        if (parent::validateParams($params, ['content']) && empty($params['skip_purify'])) {
            $params['content'] = Output::getPurified($params['content'], true);
        }

        return $params;
    }

    public static function renderEmojis(array $params = []): array {
        if (parent::validateParams($params, ['content'])) {
            $params['content'] = Text::renderEmojis($params['content']);
        }

        return $params;
    }

    public static function replaceAnchors(array $params = []): array {
        if (parent::validateParams($params, ['content'])) {
            $params['content'] = URL::replaceAnchorsWithText($params['content']);
        }

        return $params;
    }
}
