<?php
return [
    'first' => '<li class="page-item"><a class="page-link" href="{{url}}" title="{{text}}"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>',
    'prevActive' => '<li class="page-item"><a class="page-link" href={{url}} aria-label="{{text}}" title="{{text}}"><span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
            <span class="sr-only">{{text}}</span></a></li>',
    'prevDisabled' => '<li class="page-item disabled"><a class="page-link" aria-label="{{text}}" title="{{text}}"><span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
            <span class="sr-only">{{text}}</span></a></li>',
    'number' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
    'current' => '<li class="page-item active"><a class="page-link" href="{{url}}">{{text}}</a></li>',
    'nextActive' => '<li class="page-item"><a class="page-link" href={{url}} aria-label="{{text}}" title="{{text}}"><span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            <span class="sr-only">{{text}}</span></a></li>',
    'nextDisabled' => '<li class="page-item disabled"><a class="page-link" " aria-label="{{text}}" title="{{text}}"><span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            <span class="sr-only">{{text}}</span></a></li>',
    'last' => '<li class="page-item"><a class="page-link" href="{{url}}" title="{{text}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>',
];
