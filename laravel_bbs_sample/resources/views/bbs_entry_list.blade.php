<!-- 投稿フォーム -->
@include("parts.bbs_entry_form")

<h2>記事一覧</h2>

{{ $item_list->links() }}

<style type="text/css">
.pagination {
    display: inline-block;
}
.pagination .page-item {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    list-style: none;
}
</style>

@foreach ($item_list as $item)
<div class="entry">
	<h5>{{ $item->title }} by {{ $item->author }}</h5>
	<div>
		{!! nl2br(e($item->body)) !!}
	</div>
</div>
@endforeach​


@if(count($item_list) < 1)
<p>投稿がありません</p>
@endif
