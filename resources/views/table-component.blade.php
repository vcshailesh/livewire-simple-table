<div class="container" style="margin-top:50px">
    <table class="table">
        <thead>
          <tr>
            @foreach($columns as $column)
                <th scope="col">{{ $column->text }}</th>
            @endforeach 
          </tr>
        </thead>
        <tbody>
          @foreach($models as $model)
            <tr>
              @foreach($columns as $column)
                <td>{{ Arr::get($model->toArray(), $column->attribute) }} </td>
              @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
