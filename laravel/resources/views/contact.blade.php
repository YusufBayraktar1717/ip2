@extends('layout')

@section('main')

    <h5>İletişim Formu</h5>
    <h4>İletişim sayfası içeriği<h4/>
    @if($errors->any())
        Hatalı Veri Girişi
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="" method="POST">
        @csrf
        İsminiz:
        <br/> <input type="text" name="isim" value="{{old('isim')}}"/>
        <br /><br />
        Konu:
        <br />
        <select name="konu">

               @foreach($konular as $konu)
                <option {{($konu==old('konu'))? 'selected':''}}>{{$konu}} </option>
               @endforeach
        </select>
        <br /><br />
        Mesajınız:
        <br/>
        <textarea name="mesaj">{{ old('mesaj') }} </textarea>
        <br /><br />
        <input type="submit" value="Mesajı Gönder">
    </form>
@endsection
