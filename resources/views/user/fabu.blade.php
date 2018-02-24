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
                                <option>角色</option>
                                <option>账号</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">所在区服</label>
                            <select id="disabledSelect" class="form-control">
                                <option>---请选择---</option>
                                <option>外观</option>
                                <option>装备</option>
                                <option>账号</option>
                                <option>角色</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">装分(pvp)</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="请输入装备分数">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">装分(pve)</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="请输入装备分数">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">体型</label>
                            <select id="disabledSelect" class="form-control">
                                <option>---请选择---</option>
                                <option>成男</option>
                                <option>成女</option>
                                <option>正太</option>
                                <option>萝莉</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">门派</label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 纯阳
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 天策
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 万花
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 七秀
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 少林
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 藏剑
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 五毒
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 唐门
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 明教
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 丐帮
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 苍云
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 长歌
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 霸刀
                            </label>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="option1"> 可重置
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="option1"> 须分离
                            </label>      
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">内容</label>
                            <textarea class="form-control" placeholder="请将账号角色的如外观，坐骑，挂件等输入此处" rows="5"></textarea>
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