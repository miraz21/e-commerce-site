@extends('layouts.frontend')
@section('main')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>{{config('app.name')}}</title>
  </head>
  <body>
    <h1><i class="far fa-arrow-alt-circle-right"></i>Delivery and Payment</h1>
    <div class="container">
      <div class="col-sm-6">
        <h1><i class="fad fa-arrows-alt"></i>আপনি ঢাকা সিটির ভীতরে হলেঃ-</h1>
        <p> <i class="fad fa-arrows-alt"></i>ক্যাশ অন ডেলিভারি/হ্যান্ড টু হ্যান্ড ডেলিভারি।</p>
        <p><i class="fad fa-arrows-alt"></i>ডেলিভারি চার্জ ৫০ টাকা।</p>
        <p><i class="fad fa-arrows-alt"></i>পণ্যের টাকা ডেলিভারি ম্যানের কাছে প্রদান করবেন।</p>
        <p><i class="fad fa-arrows-alt"></i>অর্ডার কনফার্ম করার ৪৮ ঘণ্টার ভিতর ডেলিভারি পাবেন।</p>
        <p> <i class="fad fa-arrows-alt"></i>বিঃদ্রঃ- ছবি এবং বর্ণনার সাথে পণ্যের মিল থাকা সত্যেও আপনি পণ্য গ্রহন করতে না চাইলে ডেলিভারি চার্জ ৫০ টাকা ডেলিভারি ম্যানকে প্রদান করতে বাধ্য থাকিবেন।</p>
      </div>
    </div>
      <div class="container">
      <div class="col-sm-6">
        <h1><i class="fad fa-arrows-alt"></i>আপনি ঢাকা সিটির বাহীরে হলেঃ--</h1>
        <p> <i class="fad fa-arrows-alt"></i> আপনি ঢাকা সিটির বাহীরে হলেঃ-
 কন্ডিশন বুকিং অন কুরিয়ার সার্ভিস (জননী কুরিয়ার অথবা এস এ পরিবহন কুরিয়ার সার্ভিস) এ নিতে হবে।</p>
        <p><i class="fad fa-arrows-alt"></i>কুরিয়ার সার্ভিস চার্জ ১০০ টাকা বিকাশে অগ্রিম প্রদান করতে হবে।</p>
        <p> <i class="fad fa-arrows-alt"></i>কুরিয়ার চার্জ ১০০ টাকা বিকাশ করার পর ৪৮ ঘন্টার ভিতর কুরিয়ার হতে পণ্য গ্রহন করতে হবে এবং পণ্যের টাকা কুরিয়ার অফিসে প্রদান করতে হবে।</p>
        <p> <i class="fad fa-arrows-alt"></i>বিঃদ্রঃ- ছবি এবং বর্ণনার সাথে পণ্যের মিল থাকা সত্যেও আপনি পণ্য গ্রহন করতে না চাইলে কুরিয়ার চার্জ ১০০ টাকা কুরিয়ার অফিসে প্রদান করে পণ্য আমাদের ঠিকানায় রিটার্ন করবেন। আমরা প্রয়োজনীয় ব্যবস্থা নিব।</p>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
@endsection