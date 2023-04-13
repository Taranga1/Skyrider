@extends('layouts.admin_app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    button {
  --b: 3px;   /* border thickness */
  --s: .15em; /* size of the corner */
  --c: #BD5532;
  
  padding: calc(.05em + var(--s)) calc(.3em + var(--s));
  color: var(--c);
  --_p: var(--s);
  background:
    conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--c) 0)
    var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
  transition: .3s linear, color 0s, background-color 0s;
  outline: var(--b) solid #0000;
  outline-offset: .2em;
}
button:hover,
button:focus-visible{
  --_p: 0px;
  outline-color: var(--c);
  outline-offset: .05em;
}
button:active {
  background: var(--c);
  color: #fff;
}

body {
  height: 100vh;
  margin: 0;
  display: flex;
  grid-template-columns: auto auto;
  gap: 20px;
  place-content: center;
  background: #d4d7d929;
}
button {
  font-family: system-ui, sans-serif;
  font-weight: bold;
  font-size: 4rem;
  cursor: pointer;
  border: none;
  margin: .1em;
}
    </style>
    <title>Sky-Admin</title>
</head>
<body>
    <a href="/admin/users/index"><button>View Users</button></a>
    <a href="/admin/results/create"><button style="--c: #373B44;--b: 5px;--s:12px">Add Result</button></a>
    <a href="/admin/results/display"><button>View Result</button></a>
    <a href="/admin/admission/display"><button style="--c: #373B44;--b: 5px;--s:12px">View Admissions</button></a>
    <button>Fun 3</button>
    <button style="--c: #373B44;--b: 5px;--s:12px">Fun 4</button>

</body>
</html>
@endsection
