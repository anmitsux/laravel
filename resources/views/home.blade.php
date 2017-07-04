@extends('layouts.app')

@section('content')
<div id="wrap" class="container">
    <!-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ダッシュボード</div> -->

                <!-- <div class="panel-body">
                    <a href="contact">contact</a>
                    <a href="about">about</a>
                </div> -->
            <!-- </div>
        </div>
    </div> -->
    <div class="col-md-5 col-xs-12">
      <div class="pages">
        <a href="/month-relate">
          <div class="page-btn">月別時間割</div>
        </a>
        <a href="/subject-relate">
          <div class="page-btn">授業科目</div>
        </a>
        <a href="/teacher-relate">
          <div class="page-btn">教員編集</div>
        </a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
          <div class="page-btn">ログアウト</div>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      </div>
    </div>
    <div class="col-md-7 col-xs-12">
      <table>
        <thead>
          <th class="dash-th-title">タイトル</th>
          <th class="dash-th-update">更新日</th>
          <th class="dash-th-editing">編集状況</th>
        </thead>
        <tbody>
          <tr>
            <td class="dash-td-title">1年次前期　平成29年4月</td>
            <td class="dash-td-update">17/06/18 12:00</td>
            <td class="dash-td-editing">0/25...0%</td>
          </tr>
        </tbody>
      </table>
    </div>
</div>
@endsection
