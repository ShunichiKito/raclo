
<div class="row">
    @if (Auth::check())
        <!--{!! Form::model($u_items, ['route' => ['items.hold', $u_items->myitems_check::all()-->
            @foreach ($items as $key => $item)
            <?php
print "$item->file_path";

?>
                <div class="item">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <img src="{{ $item->file_path }}" alt="" class="">
                            </div>
                            <div class="panel-body">
                                    <input type="checkbox" name="$item" value="Yes" />
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        <input type="submit" name="itemSubmit" value="Next" />
        </form>
    @endif    
</div>
