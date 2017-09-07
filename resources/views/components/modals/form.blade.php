<button type="button" class="btn {{ $buttonColor }}" {{ $design ?? '' }} data-toggle="modal" data-target="#{{ $target }}" style="margin: 4px">
    {{ $buttonIcon }}
</button>

<div class="modal fade" id="{{ $target }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="left">{{ $modalTitle }}</h4>
            </div>
            <form class="form-horizontal" action="{{ $url }}" method="POST" style="display: inline;">
                <div class="modal-body">
                    {{ $slot }}
                </div>
                <div class="modal-footer">
                    {{ $modalFooter }}
                </div>
            </form>
        </div>
    </div>
</div>