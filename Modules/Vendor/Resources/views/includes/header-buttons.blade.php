@can('admin.access.vendor.create' && 'admin.access.vendor.manage')
<div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
	<a href="{{ route('admin.vendor.import') }}" class="btn btn-primary ml-1" data-toggle="tooltip" title="{{ __('vendor::menus.backend.vendor.import') }}">{{ __('vendor::menus.backend.vendor.import') }}</a>
    <a href="{{ route('admin.vendor.create') }}" class="btn btn-success ml-1" data-toggle="tooltip" title="{{ __('vendor::menus.backend.vendor.create') }}"><i class="fas fa-plus-circle"></i></a>
</div>
<!--btn-toolbar-->
@endcan