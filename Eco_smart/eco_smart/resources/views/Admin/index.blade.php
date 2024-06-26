<link rel="stylesheet" type="text/css" href="{{ asset('css/indexAdmin.css') }}">




@extends('layouts.appAdmin')

@section('ContentAdmin')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('Admin.create')}}" class="btn btn-success mb-3">Ajouter produit</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">image</th>
                            <th scope="col">nom</th>
                            <th scope="col">description</th>
                            <th scope="col">type</th>

                            <th scope="col" class="d-md-table-cell">prix</th>
                            <th scope="col" class="d-md-table-cell">prix remise</th>

                            <th scope="col" class="d-md-table-cell">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produits as $produit)
                        <tr>
                            <td>{{$produit->id}}</td>
                            <td><img src="{{$produit->image}}" alt=".." class="img-fluid" style="max-width: 100px; height: auto;"></td>
                            <td>{{$produit->nom}}</td>
                            <td>{{$produit->description}}</td>
                            <td>{{$produit->type}}</td>

                            <td class="d-md-table-cell">{{$produit->prix}},00</td>
                            <td class="d-md-table-cell">{{$produit->prixRemise}},00</td>

                            <td class="d-md-table-cell">
                                <a href="{{route('produits.edit',$produit->id)}}" class="btn  ms-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 32 32" style="width:24px;height:24px" version="1" viewBox="0 0 32 32" id="Edit"><path d="M26.857,31.89H3c-1.654,0-3-1.346-3-3V5.032c0-1.654,1.346-3,3-3h16.214c0.553,0,1,0.448,1,1s-0.447,1-1,1H3c-0.551,0-1,0.449-1,1V28.89c0,0.551,0.449,1,1,1h23.857c0.552,0,1-0.449,1-1V12.675c0-0.552,0.447-1,1-1s1,0.448,1,1V28.89C29.857,30.544,28.512,31.89,26.857,31.89z M24.482,23.496c-0.002,0-0.003,0-0.005,0L5.192,23.407c-0.553-0.002-0.998-0.452-0.996-1.004c0.002-0.551,0.45-0.996,1-0.996c0.001,0,0.003,0,0.004,0l19.286,0.089c0.552,0.002,0.998,0.452,0.995,1.004C25.479,23.051,25.032,23.496,24.482,23.496z M15.251,18.415c-0.471,0-0.781-0.2-0.957-0.366c-0.297-0.28-0.709-0.931-0.14-2.151l0.63-1.35c0.516-1.104,1.596-2.646,2.459-3.51L26,2.281c0.003-0.002,0.005-0.004,0.007-0.006c0.002-0.002,0.004-0.004,0.006-0.006l0.451-0.451c1.168-1.169,2.979-1.262,4.036-0.207c0,0,0,0,0,0c1.056,1.055,0.963,2.866-0.207,4.036c0,0-0.536,0.552-0.586,0.586l-8.635,8.635c-0.85,0.85-2.345,1.964-3.405,2.538l-1.218,0.657C15.969,18.322,15.572,18.415,15.251,18.415z M26.714,4.396l-8.056,8.057c-0.699,0.7-1.644,2.047-2.061,2.942L16.4,15.815l0.316-0.17c0.885-0.479,2.233-1.482,2.942-2.192l8.057-8.057L26.714,4.396z M28.163,3.016l0.932,0.932c0.2-0.356,0.177-0.737-0.009-0.923C28.881,2.82,28.499,2.83,28.163,3.016z" fill="#595bd4" class="color000000 svgShape"></path></svg>
                                </a>
                                <form method="POST" action="{{route('objets.destroy',$produit->id)}}" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce post?')" style="display: inline;">
                                    @csrf
                                    @method('delete')
                                    <button type='submit' class="btn ">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0,0,256,256"
                                            style="fill:#ffffff;">
                                            <g transform="translate(25.6,25.6) scale(0.8,0.8)"><g fill="#fa5252" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M21,0c-1.64453,0-3,1.35547-3,3v2h-7.8125c-0.125,-0.02344-0.25,-0.02344-0.375,0h-1.8125c-0.03125,0-0.0625,0-0.09375,0c-0.55078,0.02734-0.98047,0.49609-0.95312,1.04688c0.02734,0.55078,0.49609,0.98047,1.04688,0.95313h1.09375l3.59375,40.5c0.125,1.39844,1.31641,2.5,2.71875,2.5h19.1875c1.40234,0,2.59375,-1.10156,2.71875,-2.5l3.59375,-40.5h1.09375c0.35938,0.00391,0.69531,-0.18359,0.87891,-0.49609c0.17969,-0.3125,0.17969,-0.69531,0,-1.00781c-0.18359,-0.3125,-0.51953,-0.5,-0.87891,-0.49609h-10v-2c0,-1.64453-1.35547,-3-3,-3zM21,2h8c0.5625,0,1,0.4375,1,1v2h-10v-2c0,-0.5625,0.4375,-1,1,-1zM11.09375,7h27.8125l-3.59375,40.34375c-0.03125,0.34766-0.40234,0.65625-0.71875,0.65625h-19.1875c-0.31641,0-0.6875,-0.30859,-0.71875,-0.65625zM18.90625,9.96875c-0.04297,0.00781,-0.08594,0.01953,-0.125,0.03125c-0.46484,0.10547,-0.79297,0.52344,-0.78125,1v33c-0.00391,0.35938,0.18359,0.69531,0.49609,0.87891c0.3125,0.17969,0.69531,0.17969,1.00781,0c0.3125,-0.18359,0.5,-0.51953,0.49609,-0.87891v-33c0.01172,-0.28906,-0.10547,-0.56641,-0.3125,-0.76172c-0.21094,-0.19922,-0.49609,-0.29687,-0.78125,-0.26953zM24.90625,9.96875c-0.04297,0.00781,-0.08594,0.01953,-0.125,0.03125c-0.46484,0.10547,-0.79297,0.52344,-0.78125,1v33c-0.00391,0.35938,0.18359,0.69531,0.49609,0.87891c0.3125,0.17969,0.69531,0.17969,1.00781,0c0.3125,-0.18359,0.5,-0.51953,0.49609,-0.87891v-33c0.01172,-0.28906,-0.10547,-0.56641,-0.3125,-0.76172c-0.21094,-0.19922,-0.49609,-0.29687,-0.78125,-0.26953zM30.90625,9.96875c-0.04297,0.00781,-0.08594,0.01953,-0.125,0.03125c-0.46484,0.10547,-0.79297,0.52344,-0.78125,1v33c-0.00391,0.35938,0.18359,0.69531,0.49609,0.87891c0.3125,0.17969,0.69531,0.17969,1.00781,0c0.3125,-0.18359,0.5,-0.51953,0.49609,-0.87891v-33c0.01172,-0.28906,-0.10547,-0.56641,-0.3125,-0.76172c-0.21094,-0.19922,-0.49609,-0.29687,-0.78125,-0.26953z"></path></g></g></g>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
