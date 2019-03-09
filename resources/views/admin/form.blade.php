@extends('admin.master')

@section('body')
<div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">General Elements</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form role="form">
            <!-- text input -->
            <div class="form-group">
              <label>Text</label>
              <input type="text" class="form-control" placeholder="Enter ...">
            </div>
            <div class="form-group">
              <label>Text Disabled</label>
              <input type="text" class="form-control" placeholder="Enter ..." disabled>
            </div>

            <!-- textarea -->
            <div class="form-group">
              <label>Textarea</label>
              <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>
            <div class="form-group">
              <label>Textarea Disabled</label>
              <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
            </div>

            <!-- input states -->
            <div class="form-group has-success">
              <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with
                success</label>
              <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
            </div>
            <div class="form-group has-warning">
              <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                warning</label>
              <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
            </div>
            <div class="form-group has-error">
              <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                error</label>
              <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
            </div>

            <!-- checkbox -->
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="option1">
                <label class="form-check-label">Checkbox</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="option1" disabled>
                <label class="form-check-label">Checkbox disabled</label>
              </div>
            </div>

            <!-- radio -->
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="radio" value="option1">
                <label class="form-check-label">Radio</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="option1" disabled>
                <label class="form-check-label">Radio disabled</label>
              </div>
            </div>

            <!-- select -->
            <div class="form-group">
              <label>Select</label>
              <select class="form-control">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
            <div class="form-group">
              <label>Select Disabled</label>
              <select class="form-control" disabled>
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>

            <!-- Select multiple-->
            <div class="form-group">
              <label>Select Multiple</label>
              <select multiple class="form-control">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
            <div class="form-group">
              <label>Select Multiple Disabled</label>
              <select multiple class="form-control" disabled>
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>

          </form>
        </div>
        <!-- /.card-body -->
      </div>
@endsection