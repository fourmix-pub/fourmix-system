
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">

            {{ $slot }}

        </table>
    </div>

    @component('components.elements.table.admin.pagination')
    @endcomponent
</div>