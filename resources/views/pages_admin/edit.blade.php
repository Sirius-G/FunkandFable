<x-admin-master>

@section('content')

<div class="container" style="position: relative;">
  <h1>Edit: {{ $page->title }}</h1><br><br>
  <form method="POST" action="{{ route('admin.update', $page) }}" class="border border-1 rounded" style="background-color: rgba(255, 255, 255, 0.5);">
      @csrf
      @method('PUT')

      <div id="editorjs"></div>
      <input type="hidden" name="sections" id="sections">
      <button type="submit" class="btn btn-primary btn-sm px-4 py-2 rounded-3 shadow-sm hover-button" style="position: absolute; top: 50px; left: 10px; z-index: 100;">
        <i class="fa fa-save fa-lg"></i> Save Changes
      </button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script>
const editorData = {
    blocks: [
        @foreach($page->sections as $key => $content)
        {
            type: "paragraph",
            data: {
                text: "<strong>{{ $key }}:</strong> {!! addslashes($content) !!}"
            }
        },
        @endforeach
    ]
};

const editor = new EditorJS({
    holder: 'editorjs',
    data: editorData,
    onChange: async () => {
        const output = await editor.save();
        document.getElementById('sections').value = JSON.stringify(output);
    },
});
</script>

@endsection

</x-admin-master>
