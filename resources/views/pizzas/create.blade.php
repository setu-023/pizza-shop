@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
  <h1>Create a New Pizza</h1>
  <form action="{{ route('pizzas.store') }}" method="POST">
      @csrf
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>
   
    <label for="type">Choose type of pizza:</label> 
    <select name="type" id="type">
      <option value="god father">god father</option>
      <option value="meatgasm">meatgasm</option>
      <option value="funky chiken">funky chiken</option>
      <option value="triple cheese">triple cheese</option>
    </select>


    <label for="base">Choose crust:</label>
    <select name="base" id="base">
      <option value="thick">Thick</option>
      <option value="thin & crispy">Thin & Crispy</option>
      <option value="cheese crust">Cheese Crust</option>
      <option value="garlic crust">Garlic Crust</option>
    </select>

    <label for="price">Your Phone:</label>
    <input type="text" name="price" id="price" required>
   
    <fieldset>
      <label>Extra toppings:</label>
      <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
      <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
      <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
      <input type="checkbox" name="toppings[]" value="olives">Olives<br />
    </fieldset>
    

    <input type="submit" value="Order Pizza">
  </form>
</div>
@endsection