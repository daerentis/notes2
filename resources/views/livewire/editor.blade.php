<div wire:ignore>
  <script>
    var quillOptions = {
      theme: 'bubble',
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

  <div class="flex md:justify-center mb-5">
    <input type="text" class="md:text-center text-3xl border-transparent transition focus:shadow-none focus:ring-0 focus:border-freshlime" wire:model="title" />
  </div>

  <div x-data x-ref="quillEditor" x-init="
      quill = new Quill($refs.quillEditor, quillOptions);
      quill.focus();
      const triggerUpdate = Alpine.debounce(() => $dispatch('change', quill.root.innerHTML), 500);
      quill.on('text-change', function () {
        triggerUpdate();
      });
      "
    wire:model.lazy="body">{!! $body !!}</div>
</div>