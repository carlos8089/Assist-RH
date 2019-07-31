@extends('templates.base')
@section('element1')
<style>
        .principal{
            padding: 20px;
            background-color: #f1f1f1;
            overflow: auto;
            
        }
    </style>
        <div class="principal">
            
            <H2>Gérer la paie des salariés</H2>
            <p>pijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjuggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpj
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugug
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjfyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyykl
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                ugugugugugugugugugugugugugugugugugugugugugugugugugugugugpijepzpjpmfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjghvujfguy
                uggggggggggggggggggggggggggggggggggggg
                ihoooooooooooooooooooooooooooooooooooooooooooooooooooooooo
                
            </p> 
        </div> 
@endsection

@section('element2')
    <button disabled="disabled">jhdsluih</button>

@endsection