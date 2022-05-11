@extends('admin.templates.default')

@section('title', format_title_admin('Add media'))

@section('content')
    <div class="heading-section mb-4">
        <div class="heading-section__left">
            <h1 class="heading heading--1">Edit event</h1>
        </div>
    </div>
    <div class="main">
      <form action="{{ route('admin.media.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="drop-zone mb-3">
          <div class="drop-zone__wrapper" id="drop_zone">
            <svg class="drop-zone__ico ico ico--accent" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 384"><path d="M464,64H48A48,48,0,0,0,0,112V400a48,48,0,0,0,48,48H464a48,48,0,0,0,48-48V112A48,48,0,0,0,464,64Zm-6,336H54a6,6,0,0,1-6-6V118a6,6,0,0,1,6-6H458a6,6,0,0,1,6,6V394A6,6,0,0,1,458,400ZM128,152a40,40,0,1,0,40,40A40,40,0,0,0,128,152ZM96,352H416V272l-87.52-87.51a12,12,0,0,0-17,0L192,304l-39.51-39.52a12,12,0,0,0-17,0L96,304Z" transform="translate(0 -64)"/></svg>
            <div class="drop-zone__text">Drop files</div>
            <div class="drop-zone__separator">or</div>
            <input type="file" name="files[]" multiple="multiple" id="file"/>
          </div>
        </div>
        <button class="button button--primary" type="submit">Save</button>
      </form>
    </div>
@endsection

@section('scripts_body')
  <script>
    let fileInput = document.querySelector('#file');

    document.querySelector('#drop_zone').addEventListener('dragover', (e) => {
      e.preventDefault()
      if (!$('body').hasClass('dragging')) {
        $('body')[0].classList.add('dragging')
      }
    })

    document.querySelector('#drop_zone').addEventListener('dragleave', () => {
      $('body')[0].classList.remove('dragging')
    })

    document.querySelector('#drop_zone').addEventListener('drop', (e) => {
      e.preventDefault()
      $('body')[0].classList.remove('dragging')
      fileInput.files = e.dataTransfer.files
    })
  </script>
@endsection
