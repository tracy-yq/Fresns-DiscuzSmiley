@extends('DiscuzSmiley::layout')

@section('content')
    <form action="{{ route('discuz-smiley.admin.update') }}" method="post">
        @csrf
        @method('put')

        <div class="row">
            <div class="col-md-5 mb-3">
                <div class="input-group">
                    <span class="input-group-text">查找</span>
                    <input type="text" class="form-control" name="find" value="https://cdn.fresns.cn" required>
                </div>
            </div>
            <div class="col-md-5 mb-3">
                <div class="input-group">
                    <span class="input-group-text">替换为</span>
                    <input type="text" class="form-control" name="replaceWith" value="{{ $systemUrl.'/assets/plugins/DiscuzSmiley' }}" required>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-outline-primary">查找并替换</button>
                </div>
            </div>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-hover align-middle text-nowrap">
            <thead>
                <tr class="table-info">
                    <th scope="col">表情组名称</th>
                    <th scope="col">File ID</th>
                    <th scope="col">File URL</th>
                    <th scope="col">查看</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stickers as $group)
                    <tr>
                        <td><img src="{{ $group->image_file_url }}" width="28" height="28" class="me-2"> {{ $group->getLangName('zh-Hans') }}</td>
                        <td>{{ $group->image_file_id }}</td>
                        <td>{{ $group->image_file_url }}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="{{ '#'.$group->code.'Modal' }}">查看全部</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- 表情列表 -->
    @foreach ($stickers as $group)
        @switch($group->code)
            @case('default')
                @php
                    $stickerList = $defaultStickers;
                @endphp
                @break

            @case('coolmonkey')
                @php
                    $stickerList = $coolmonkeyStickers;
                @endphp
                @break

            @case('grapeman')
                @php
                    $stickerList = $grapemanStickers;
                @endphp
                @break

            @case('face')
                @php
                    $stickerList = $faceStickers;
                @endphp
                @break

            @default
                @php
                    $stickerList = [];
                @endphp
        @endswitch

        @empty($stickerList)
            @continue
        @endempty

        <div class="modal fade" id="{{ $group->code.'Modal' }}" tabindex="-1" aria-labelledby="{{ $group->code.'ModalLabel' }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">{{ $group->getLangName('zh-Hans') }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle text-nowrap">
                                <thead>
                                    <tr class="table-info">
                                        <th scope="col">表情图</th>
                                        <th scope="col">表情符号</th>
                                        <th scope="col">File ID</th>
                                        <th scope="col">File URL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stickerList as $sticker)
                                        <tr>
                                            <td><img src="{{ $sticker->image_file_url }}" width="28" height="28"></td>
                                            <td>{{ '['.$sticker->code.']' }}</td>
                                            <td>{{ $sticker->image_file_id }}</td>
                                            <td>{{ $sticker->image_file_url }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
