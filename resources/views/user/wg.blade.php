@extends('user.uheader')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">商品发布</div>

                <div class="panel-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">标题</label>
                            <input type="title" class="form-control" id="exampleInputEmail1" placeholder="请输入标题">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">价格</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="请输入价格">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">商品类型</label>
                            <select id="disabledSelect" class="form-control">
                                <option>---请选择---</option>
                                <option>头发</option>
                                <option>成衣</option>
                                <option>披风</option>
                                <option>盒子</option>
                                <option>小玩意儿</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">所在区服</label>
                            <select id="disabledSelect" class="form-control">
                                <option>---请选择---</option>
                                <option>龙争虎斗</option>
                                <option>长安城</option>
                                <option>白帝城</option>
                                <option>蝶恋花</option>
                            </select>
                        </div>
                       
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="option1"> 玄金
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox2" value="option2"> 白发
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox3" value="option3"> 狐金
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="option1"> 喵金
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox2" value="option2"> 国金
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox3" value="option3"> 五红
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="option1"> 六红
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox2" value="option2"> 七红
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox3" value="option3"> 八红
                            </label>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">备注</label>
                            <textarea class="form-control" placeholder="请将特别声明写入此处" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">上传照片</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">拍卖模式</label>
                            <input type="checkbox" id="inlineCheckbox2" value="option2">
                            <p class="help-block">此模式适合价格上升空间较大者(如：玄晶等)</p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">发布</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection