<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace Plugins\DiscuzSmiley\Http\Controllers;

use App\Helpers\PluginHelper;
use App\Models\Language;
use App\Models\Sticker;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Plugins\DiscuzSmiley\Helpers\DataHelper;

class AdminController extends Controller
{
    public function index()
    {
        $version = PluginHelper::fresnsPluginVersionByFskey('DiscuzSmiley');

        $default = DataHelper::default();
        $coolmonkey = DataHelper::coolmonkey();
        $grapeman = DataHelper::grapeman();
        $face = DataHelper::face();

        return view('DiscuzSmiley::index', compact(
            'version',
            'default',
            'coolmonkey',
            'grapeman',
            'face',
        ));
    }

    public function smiley()
    {
        $version = PluginHelper::fresnsPluginVersionByFskey('DiscuzSmiley');

        $systemUrl = config('app.url');

        $codes = [
            'default',
            'coolmonkey',
            'grapeman',
            'face',
        ];

        $stickers = Sticker::whereIn('code', $codes)->orderBy('rating', 'asc')->get();

        $default = $stickers->where('code', 'default')->first();
        $coolmonkey = $stickers->where('code', 'coolmonkey')->first();
        $grapeman = $stickers->where('code', 'grapeman')->first();
        $face = $stickers->where('code', 'face')->first();

        $defaultStickers = Sticker::where('parent_id', $default?->id)->orderBy('rating', 'asc')->get();
        $coolmonkeyStickers = Sticker::where('parent_id', $coolmonkey?->id)->orderBy('rating', 'asc')->get();
        $grapemanStickers = Sticker::where('parent_id', $grapeman?->id)->orderBy('rating', 'asc')->get();
        $faceStickers = Sticker::where('parent_id', $face?->id)->orderBy('rating', 'asc')->get();

        return view('DiscuzSmiley::smiley', compact(
            'version',
            'systemUrl',
            'stickers',
            'defaultStickers',
            'coolmonkeyStickers',
            'grapemanStickers',
            'faceStickers',
        ));
    }

    public function import(Request $request)
    {
        $systemUrl = config('app.url');

        if ($request->default) {
            $defaultGroup = Sticker::where('code', 'default')->where('type', Sticker::TYPE_GROUP)->first();
            if (empty($defaultGroup)) {
                $defaultGroup = Sticker::create([
                    'code' => 'default',
                    'name' => 'default',
                    'image_file_url' => "{$systemUrl}/assets/plugins/DiscuzSmiley/smiley/default/smile.gif",
                    'type' => Sticker::TYPE_GROUP,
                ]);

                Language::updateOrCreate([
                    'table_name' => 'stickers',
                    'table_column' => 'name',
                    'table_id' => $defaultGroup->id,
                    'lang_tag' => 'en',
                ],
                [
                    'lang_content' => 'Default',
                ]);

                Language::updateOrCreate([
                    'table_name' => 'stickers',
                    'table_column' => 'name',
                    'table_id' => $defaultGroup->id,
                    'lang_tag' => 'zh-Hans',
                ],
                [
                    'lang_content' => '默认',
                ]);

                Language::updateOrCreate([
                    'table_name' => 'stickers',
                    'table_column' => 'name',
                    'table_id' => $defaultGroup->id,
                    'lang_tag' => 'zh-Hant',
                ],
                [
                    'lang_content' => '默認',
                ]);
            }

            $saveSticker = DataHelper::saveSticker('default', $defaultGroup->id, $systemUrl);
        }

        if ($request->coolmonkey) {
            $coolmonkeyGroup = Sticker::where('code', 'coolmonkey')->where('type', Sticker::TYPE_GROUP)->first();
            if (empty($coolmonkeyGroup)) {
                $coolmonkeyGroup = Sticker::create([
                    'code' => 'coolmonkey',
                    'name' => 'coolmonkey',
                    'image_file_url' => "{$systemUrl}/assets/plugins/DiscuzSmiley/smiley/coolmonkey/01.gif",
                    'type' => Sticker::TYPE_GROUP,
                ]);

                Language::updateOrCreate([
                    'table_name' => 'stickers',
                    'table_column' => 'name',
                    'table_id' => $coolmonkeyGroup->id,
                    'lang_tag' => 'en',
                ],
                [
                    'lang_content' => 'Cool Monkey',
                ]);

                Language::updateOrCreate([
                    'table_name' => 'stickers',
                    'table_column' => 'name',
                    'table_id' => $coolmonkeyGroup->id,
                    'lang_tag' => 'zh-Hans',
                ],
                [
                    'lang_content' => '酷猴',
                ]);

                Language::updateOrCreate([
                    'table_name' => 'stickers',
                    'table_column' => 'name',
                    'table_id' => $coolmonkeyGroup->id,
                    'lang_tag' => 'zh-Hant',
                ],
                [
                    'lang_content' => '酷猴',
                ]);
            }

            $saveSticker = DataHelper::saveSticker('coolmonkey', $coolmonkeyGroup->id, $systemUrl);
        }

        if ($request->grapeman) {
            $grapemanGroup = Sticker::where('code', 'grapeman')->where('type', Sticker::TYPE_GROUP)->first();
            if (empty($grapemanGroup)) {
                $grapemanGroup = Sticker::create([
                    'code' => 'grapeman',
                    'name' => 'grapeman',
                    'image_file_url' => "{$systemUrl}/assets/plugins/DiscuzSmiley/smiley/grapeman/01.gif",
                    'type' => Sticker::TYPE_GROUP,
                ]);

                Language::updateOrCreate([
                    'table_name' => 'stickers',
                    'table_column' => 'name',
                    'table_id' => $grapemanGroup->id,
                    'lang_tag' => 'en',
                ],
                [
                    'lang_content' => 'Grape Man',
                ]);

                Language::updateOrCreate([
                    'table_name' => 'stickers',
                    'table_column' => 'name',
                    'table_id' => $grapemanGroup->id,
                    'lang_tag' => 'zh-Hans',
                ],
                [
                    'lang_content' => '呆呆男',
                ]);

                Language::updateOrCreate([
                    'table_name' => 'stickers',
                    'table_column' => 'name',
                    'table_id' => $grapemanGroup->id,
                    'lang_tag' => 'zh-Hant',
                ],
                [
                    'lang_content' => '呆呆男',
                ]);
            }

            $saveSticker = DataHelper::saveSticker('grapeman', $grapemanGroup->id, $systemUrl);
        }

        if ($request->face) {
            $faceGroup = Sticker::where('code', 'face')->where('type', Sticker::TYPE_GROUP)->first();
            if (empty($faceGroup)) {
                $faceGroup = Sticker::create([
                    'code' => 'face',
                    'name' => 'face',
                    'image_file_url' => "{$systemUrl}/assets/plugins/DiscuzSmiley/smiley/face/1.gif",
                    'type' => Sticker::TYPE_GROUP,
                ]);

                Language::updateOrCreate([
                    'table_name' => 'stickers',
                    'table_column' => 'name',
                    'table_id' => $faceGroup->id,
                    'lang_tag' => 'en',
                ],
                [
                    'lang_content' => 'Face',
                ]);

                Language::updateOrCreate([
                    'table_name' => 'stickers',
                    'table_column' => 'name',
                    'table_id' => $faceGroup->id,
                    'lang_tag' => 'zh-Hans',
                ],
                [
                    'lang_content' => '小黄脸',
                ]);

                Language::updateOrCreate([
                    'table_name' => 'stickers',
                    'table_column' => 'name',
                    'table_id' => $faceGroup->id,
                    'lang_tag' => 'zh-Hant',
                ],
                [
                    'lang_content' => '小黃臉',
                ]);
            }

            $saveSticker = DataHelper::saveSticker('face', $faceGroup->id, $systemUrl);
        }

        if (! $saveSticker) {
            return back()->with('failure', '导入失败');
        }

        return back()->with('success', '导入成功');
    }

    public function update(Request $request)
    {
        $find = $request->find;
        $replaceWith = $request->replaceWith;

        if (empty($find) || empty($replaceWith)) {
            return back()->with('failure', '查找词和替换词不能为空');
        }

        Sticker::where('image_file_url', 'like', "%{$find}%")->update([
            'image_file_url' => DB::raw("REPLACE(image_file_url, '$find', '$replaceWith')"),
        ]);

        return back()->with('success', '执行成功');
    }
}
