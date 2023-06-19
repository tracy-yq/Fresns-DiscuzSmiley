<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace Plugins\DiscuzSmiley\Helpers;

use App\Models\Sticker;

class DataHelper
{
    public static function default(): array
    {
        return [
            [
                'code' => 'smile',
                'name' => 'smile',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/smile.gif',
                'rating' => 1,
            ],
            [
                'code' => 'sad',
                'name' => 'sad',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/sad.gif',
                'rating' => 2,
            ],
            [
                'code' => 'biggrin',
                'name' => 'biggrin',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/biggrin.gif',
                'rating' => 3,
            ],
            [
                'code' => 'cry',
                'name' => 'cry',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/cry.gif',
                'rating' => 4,
            ],
            [
                'code' => 'huffy',
                'name' => 'huffy',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/huffy.gif',
                'rating' => 5,
            ],
            [
                'code' => 'shocked',
                'name' => 'shocked',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/shocked.gif',
                'rating' => 6,
            ],
            [
                'code' => 'tongue',
                'name' => 'tongue',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/tongue.gif',
                'rating' => 7,
            ],
            [
                'code' => 'shy',
                'name' => 'shy',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/shy.gif',
                'rating' => 8,
            ],
            [
                'code' => 'titter',
                'name' => 'titter',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/titter.gif',
                'rating' => 9,
            ],
            [
                'code' => 'sweat',
                'name' => 'sweat',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/sweat.gif',
                'rating' => 10,
            ],
            [
                'code' => 'mad',
                'name' => 'mad',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/mad.gif',
                'rating' => 11,
            ],
            [
                'code' => 'lol',
                'name' => 'lol',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/lol.gif',
                'rating' => 12,
            ],
            [
                'code' => 'loveliness',
                'name' => 'loveliness',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/loveliness.gif',
                'rating' => 13,
            ],
            [
                'code' => 'funk',
                'name' => 'funk',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/funk.gif',
                'rating' => 14,
            ],
            [
                'code' => 'curse',
                'name' => 'curse',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/curse.gif',
                'rating' => 15,
            ],
            [
                'code' => 'dizzy',
                'name' => 'dizzy',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/dizzy.gif',
                'rating' => 16,
            ],
            [
                'code' => 'shutup',
                'name' => 'shutup',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/shutup.gif',
                'rating' => 17,
            ],
            [
                'code' => 'sleepy',
                'name' => 'sleepy',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/sleepy.gif',
                'rating' => 18,
            ],
            [
                'code' => 'hug',
                'name' => 'hug',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/hug.gif',
                'rating' => 19,
            ],
            [
                'code' => 'victory',
                'name' => 'victory',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/victory.gif',
                'rating' => 20,
            ],
            [
                'code' => 'time',
                'name' => 'time',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/time.gif',
                'rating' => 21,
            ],
            [
                'code' => 'kiss',
                'name' => 'kiss',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/kiss.gif',
                'rating' => 22,
            ],
            [
                'code' => 'handshake',
                'name' => 'handshake',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/handshake.gif',
                'rating' => 23,
            ],
            [
                'code' => 'call',
                'name' => 'call',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/default/call.gif',
                'rating' => 24,
            ],
        ];
    }

    public static function coolmonkey(): array
    {
        return [
            [
                'code' => ':2_25:',
                'name' => ':2_25:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/coolmonkey/01.gif',
                'rating' => 1,
            ],
            [
                'code' => ':2_26:',
                'name' => ':2_26:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/coolmonkey/02.gif',
                'rating' => 2,
            ],
            [
                'code' => ':2_27:',
                'name' => ':2_27:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/coolmonkey/03.gif',
                'rating' => 3,
            ],
            [
                'code' => ':2_28:',
                'name' => ':2_28:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/coolmonkey/04.gif',
                'rating' => 4,
            ],
            [
                'code' => ':2_29:',
                'name' => ':2_29:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/coolmonkey/05.gif',
                'rating' => 5,
            ],
            [
                'code' => ':2_30:',
                'name' => ':2_30:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/coolmonkey/06.gif',
                'rating' => 6,
            ],
            [
                'code' => ':2_31:',
                'name' => ':2_31:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/coolmonkey/07.gif',
                'rating' => 7,
            ],
            [
                'code' => ':2_32:',
                'name' => ':2_32:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/coolmonkey/08.gif',
                'rating' => 8,
            ],
            [
                'code' => ':2_33:',
                'name' => ':2_33:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/coolmonkey/09.gif',
                'rating' => 9,
            ],
            [
                'code' => ':2_34:',
                'name' => ':2_34:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/coolmonkey/10.gif',
                'rating' => 10,
            ],
            [
                'code' => ':2_35:',
                'name' => ':2_35:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/coolmonkey/11.gif',
                'rating' => 11,
            ],
            [
                'code' => ':2_36:',
                'name' => ':2_36:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/coolmonkey/12.gif',
                'rating' => 12,
            ],
            [
                'code' => ':2_37:',
                'name' => ':2_37:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/coolmonkey/13.gif',
                'rating' => 13,
            ],
            [
                'code' => ':2_38:',
                'name' => ':2_38:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/coolmonkey/14.gif',
                'rating' => 14,
            ],
            [
                'code' => ':2_39:',
                'name' => ':2_39:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/coolmonkey/15.gif',
                'rating' => 15,
            ],
            [
                'code' => ':2_40:',
                'name' => ':2_40:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/coolmonkey/16.gif',
                'rating' => 16,
            ],
        ];
    }

    public static function grapeman(): array
    {
        return [
            [
                'code' => ':3_41:',
                'name' => ':3_41:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/01.gif',
                'rating' => 1,
            ],
            [
                'code' => ':3_42:',
                'name' => ':3_42:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/02.gif',
                'rating' => 2,
            ],
            [
                'code' => ':3_43:',
                'name' => ':3_43:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/03.gif',
                'rating' => 3,
            ],
            [
                'code' => ':3_44:',
                'name' => ':3_44:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/04.gif',
                'rating' => 4,
            ],
            [
                'code' => ':3_45:',
                'name' => ':3_45:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/05.gif',
                'rating' => 5,
            ],
            [
                'code' => ':3_46:',
                'name' => ':3_46:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/06.gif',
                'rating' => 6,
            ],
            [
                'code' => ':3_47:',
                'name' => ':3_47:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/07.gif',
                'rating' => 7,
            ],
            [
                'code' => ':3_48:',
                'name' => ':3_48:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/08.gif',
                'rating' => 8,
            ],
            [
                'code' => ':3_49:',
                'name' => ':3_49:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/09.gif',
                'rating' => 9,
            ],
            [
                'code' => ':3_50:',
                'name' => ':3_50:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/10.gif',
                'rating' => 10,
            ],
            [
                'code' => ':3_51:',
                'name' => ':3_51:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/11.gif',
                'rating' => 11,
            ],
            [
                'code' => ':3_52:',
                'name' => ':3_52:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/12.gif',
                'rating' => 12,
            ],
            [
                'code' => ':3_53:',
                'name' => ':3_53:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/13.gif',
                'rating' => 13,
            ],
            [
                'code' => ':3_54:',
                'name' => ':3_54:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/14.gif',
                'rating' => 14,
            ],
            [
                'code' => ':3_55:',
                'name' => ':3_55:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/15.gif',
                'rating' => 15,
            ],
            [
                'code' => ':3_56:',
                'name' => ':3_56:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/16.gif',
                'rating' => 16,
            ],
            [
                'code' => ':3_57:',
                'name' => ':3_57:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/17.gif',
                'rating' => 17,
            ],
            [
                'code' => ':3_58:',
                'name' => ':3_58:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/18.gif',
                'rating' => 18,
            ],
            [
                'code' => ':3_59:',
                'name' => ':3_59:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/19.gif',
                'rating' => 19,
            ],
            [
                'code' => ':3_60:',
                'name' => ':3_60:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/20.gif',
                'rating' => 20,
            ],
            [
                'code' => ':3_61:',
                'name' => ':3_61:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/21.gif',
                'rating' => 21,
            ],
            [
                'code' => ':3_62:',
                'name' => ':3_62:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/22.gif',
                'rating' => 22,
            ],
            [
                'code' => ':3_63:',
                'name' => ':3_63:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/23.gif',
                'rating' => 23,
            ],
            [
                'code' => ':3_64:',
                'name' => ':3_64:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/grapeman/24.gif',
                'rating' => 24,
            ],
        ];
    }

    public static function face(): array
    {
        return [
            [
                'code' => ':4_86:',
                'name' => ':4_86:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/1.gif',
                'rating' => 1,
            ],
            [
                'code' => ':4_97:',
                'name' => ':4_97:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/2.gif',
                'rating' => 2,
            ],
            [
                'code' => ':4_108:',
                'name' => ':4_108:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/3.gif',
                'rating' => 3,
            ],
            [
                'code' => ':4_110:',
                'name' => ':4_110:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/4.gif',
                'rating' => 4,
            ],
            [
                'code' => ':4_111:',
                'name' => ':4_111:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/5.gif',
                'rating' => 5,
            ],
            [
                'code' => ':4_112:',
                'name' => ':4_112:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/6.gif',
                'rating' => 6,
            ],
            [
                'code' => ':4_113:',
                'name' => ':4_113:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/7.gif',
                'rating' => 7,
            ],
            [
                'code' => ':4_114:',
                'name' => ':4_114:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/8.gif',
                'rating' => 8,
            ],
            [
                'code' => ':4_115:',
                'name' => ':4_115:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/9.gif',
                'rating' => 9,
            ],
            [
                'code' => ':4_87:',
                'name' => ':4_87:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/10.gif',
                'rating' => 10,
            ],
            [
                'code' => ':4_88:',
                'name' => ':4_88:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/11.gif',
                'rating' => 11,
            ],
            [
                'code' => ':4_89:',
                'name' => ':4_89:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/12.gif',
                'rating' => 12,
            ],
            [
                'code' => ':4_90:',
                'name' => ':4_90:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/13.gif',
                'rating' => 13,
            ],
            [
                'code' => ':4_91:',
                'name' => ':4_91:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/14.gif',
                'rating' => 14,
            ],
            [
                'code' => ':4_92:',
                'name' => ':4_92:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/15.gif',
                'rating' => 15,
            ],
            [
                'code' => ':4_93:',
                'name' => ':4_93:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/16.gif',
                'rating' => 16,
            ],
            [
                'code' => ':4_94:',
                'name' => ':4_94:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/17.gif',
                'rating' => 17,
            ],
            [
                'code' => ':4_95:',
                'name' => ':4_95:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/18.gif',
                'rating' => 18,
            ],
            [
                'code' => ':4_96:',
                'name' => ':4_96:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/19.gif',
                'rating' => 19,
            ],
            [
                'code' => ':4_98:',
                'name' => ':4_98:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/20.gif',
                'rating' => 20,
            ],
            [
                'code' => ':4_99:',
                'name' => ':4_99:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/21.gif',
                'rating' => 21,
            ],
            [
                'code' => ':4_100:',
                'name' => ':4_100:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/22.gif',
                'rating' => 22,
            ],
            [
                'code' => ':4_101:',
                'name' => ':4_101:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/23.gif',
                'rating' => 23,
            ],
            [
                'code' => ':4_102:',
                'name' => ':4_102:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/24.gif',
                'rating' => 24,
            ],
            [
                'code' => ':4_103:',
                'name' => ':4_103:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/25.gif',
                'rating' => 25,
            ],
            [
                'code' => ':4_104:',
                'name' => ':4_104:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/26.gif',
                'rating' => 26,
            ],
            [
                'code' => ':4_105:',
                'name' => ':4_105:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/27.gif',
                'rating' => 27,
            ],
            [
                'code' => ':4_106:',
                'name' => ':4_106:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/28.gif',
                'rating' => 28,
            ],
            [
                'code' => ':4_107:',
                'name' => ':4_107:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/29.gif',
                'rating' => 29,
            ],
            [
                'code' => ':4_109:',
                'name' => ':4_109:',
                'image_file_url' => '/assets/plugins/DiscuzSmiley/smiley/face/30.gif',
                'rating' => 30,
            ],
        ];
    }

    public static function saveSticker(string $stickerGroupName, int $stickerGroupId, string $systemUrl): bool
    {
        $stickers = match ($stickerGroupName) {
            default => [],
            'default' => DataHelper::default(),
            'coolmonkey' => DataHelper::coolmonkey(),
            'grapeman' => DataHelper::grapeman(),
            'face' => DataHelper::face(),
        };

        if (empty($stickers)) {
            return false;
        }

        foreach ($stickers as $item) {
            Sticker::firstOrCreate([
                'code' => $item['code'],
                'type' => Sticker::TYPE_STICKER,
            ],
            [
                'name' => $item['name'],
                'image_file_url' => $systemUrl.$item['image_file_url'],
                'parent_id' => $stickerGroupId,
                'rating' => $item['rating'],
            ]);
        }

        return true;
    }
}
