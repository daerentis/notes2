<div wire:ignore class="h-screen">
  <script>
    var quillOptions = {
      theme: 'snow',
      placeholder: 'Be creative ...',
      modules: {
        history: {
          delay: 2000,
          maxStack: 500,
          userOnly: true
        },
        toolbar: [
          ['bold', 'italic', 'underline'],
          ['blockquote', 'code-block'],        
          [{ 'header': 1 }, { 'header': 2 }],
          [{ 'list': 'ordered'}, { 'list': 'bullet' }],
          [{ 'indent': '-1'}, { 'indent': '+1' }]
        ]
      }
    };
  </script>

  <div class="flex justify-center mb-5">
    <input type="text" class="text-center text-xl border-freshlime border-transparent transition focus:shadow-none focus:ring-0 focus:border-freshlime" wire:model="title" />
  </div>

  <div x-data x-ref="quillEditor" x-init="
      quill = new Quill($refs.quillEditor, quillOptions);
      quill.on('text-change', function () {
        $dispatch('input', quill.root.innerHTML);
      });
      "
    wire:model="body">{!! $body !!}</div>
</div>