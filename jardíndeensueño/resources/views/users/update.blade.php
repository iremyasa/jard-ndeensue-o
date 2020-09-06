
<form action="/guncelle/{{$menu->id}}" method="post">
    <div class="form-group">
        <label for="examplebaslangic">Başlangıç</label>
        <input type="text" name="baslangic" value="{{$menu->baslangic}}" class="form-control" id="examplebaslangic">
    </div>
    <div class="form-group">
        <label for="exampleanayemek">Ana yemek</label>
        <input type="text" name="anayemek" value="{{$menu->anayemek}}" class="form-control" id="exampleanayemek">
    </div>
    <div class="form-group">
        <label for="exampletatli">Tatlı</label>
        <input type="text" name="tatli" value="{{$menu->tatli}}" class="form-control" id="exampletatli">
    </div>
    <div class="form-group">
        <label for="examplephoto">Fotoğraf</label>
        <input type="text" name="photo" value="{{$menu->photo}}" class="form-control" id="examplephoto">
    </div>
    <div class="form-group">
        <label for="exampleprice">Ücret</label>
        <input type="text" name="price" value="{{$menu->price}}" class="form-control" id="exampleprice">
    </div>
    <button type="submit" class="btn btn-primary">Güncelle</button>

    @csrf
</form>
