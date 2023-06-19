@extends('DiscuzSmiley::layout')

@section('content')
    <div class="table-responsive">
        <table class="table table-hover align-middle text-nowrap">
            <thead>
                <tr class="table-info">
                    <th scope="col">表情组名称</th>
                    <th scope="col">表情数量</th>
                    <th scope="col">操作</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="/assets/plugins/DiscuzSmiley/smiley/default/smile.gif" width="28" height="28" class="me-2"> 默认</td>
                    <td>24</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm float-start me-2" data-bs-toggle="modal" data-bs-target="#defaultModal">查看表情</button>
                        <form action="{{ route('discuz-smiley.admin.import') }}" method="post">
                            @csrf
                            @method('post')
                            <input type="hidden" name="default" value="1">
                            <button type="submit" class="btn btn-outline-primary btn-sm">导入</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><img src="/assets/plugins/DiscuzSmiley/smiley/coolmonkey/01.gif" width="28" height="28" class="me-2"> 酷猴</td>
                    <td>16</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm float-start me-2" data-bs-toggle="modal" data-bs-target="#coolmonkeyModal">查看表情</button>
                        <form action="{{ route('discuz-smiley.admin.import') }}" method="post">
                            @csrf
                            @method('post')
                            <input type="hidden" name="coolmonkey" value="1">
                            <button type="submit" class="btn btn-outline-primary btn-sm">导入</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><img src="/assets/plugins/DiscuzSmiley/smiley/grapeman/01.gif" width="28" height="28" class="me-2"> 呆呆男</td>
                    <td>24</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm float-start me-2" data-bs-toggle="modal" data-bs-target="#grapemanModal">查看表情</button>
                        <form action="{{ route('discuz-smiley.admin.import') }}" method="post">
                            @csrf
                            @method('post')
                            <input type="hidden" name="grapeman" value="1">
                            <button type="submit" class="btn btn-outline-primary btn-sm">导入</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><img src="/assets/plugins/DiscuzSmiley/smiley/face/1.gif" width="28" height="28" class="me-2"> 小黄脸</td>
                    <td>30</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm float-start me-2" data-bs-toggle="modal" data-bs-target="#faceModal">查看表情</button>
                        <form action="{{ route('discuz-smiley.admin.import') }}" method="post">
                            @csrf
                            @method('post')
                            <input type="hidden" name="face" value="1">
                            <button type="submit" class="btn btn-outline-primary btn-sm">导入</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- 默认 -->
    <div class="modal fade" id="defaultModal" tabindex="-1" aria-labelledby="defaultModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">默认</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @foreach ($default as $sticker)
                        <img src="{{ $sticker['image_file_url'] }}" width="28" height="28" class="me-2 mb-2">
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 酷猴 -->
    <div class="modal fade" id="coolmonkeyModal" tabindex="-1" aria-labelledby="coolmonkeyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">酷猴</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @foreach ($coolmonkey as $sticker)
                        <img src="{{ $sticker['image_file_url'] }}" width="28" height="28" class="me-2 mb-2">
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 呆呆男 -->
    <div class="modal fade" id="grapemanModal" tabindex="-1" aria-labelledby="grapemanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">酷猴</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @foreach ($grapeman as $sticker)
                        <img src="{{ $sticker['image_file_url'] }}" width="28" height="28" class="me-2 mb-2">
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 小黄脸 -->
    <div class="modal fade" id="faceModal" tabindex="-1" aria-labelledby="faceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">酷猴</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @foreach ($face as $sticker)
                        <img src="{{ $sticker['image_file_url'] }}" width="20" height="20" class="me-2 mb-2">
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>
@endsection
