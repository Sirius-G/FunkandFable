<x-admin-master>

@section('content')

<div class="container" style="position: relative;">
  <h1>Edit: {{ $page->title }}</h1>
  <form method="POST" action="{{ route('admin.update', $page) }}" class="border border-1 rounded" style="background-color: rgba(255, 255, 255, 0.5);">
      @csrf
      @method('PUT')

      <div id="editorjs"></div>
      <input type="hidden" name="sections" id="sections">
      <button type="submit" class="btn btn-primary" style="position: absolute; top: 10px; left: 225px; z-index: 100;">
        <i class="fa fa-save fa-lg"></i> Save Changes
      </button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script>
const editorData = {
    blocks: [
        @foreach($page->sections as $key => $content)
        @php
            // Handle section2 differently for readability
            if ($key === 'section2') { //add other sections here
                // Convert string to array if it contains commas
                $items = array_map('trim', explode(',', $content));
                // Join items with <br> for new lines
                $text = implode('<br>', $items);
            } else {
                // For other sections, just use content as-is
                $text = is_array($content) ? implode(', ', $content) : $content;
            }

            // Escape quotes for JS string
            $text = addslashes($text);
        @endphp
        {
            type: "paragraph",
            data: {
                text: "<strong>{{ $key }}:</strong> {!! $text !!}"
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
