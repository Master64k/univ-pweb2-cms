<?php
/**
 * Created by PhpStorm.
 * User: Master64k
 * Date: 31/10/2018
 * Time: 15:58
 */


return [
    'number' => '<li class="page-item">
            <a class="page-link" href="{{url}}">{{text}}
            </a></li>',

    'first' => '<li class="page-item">
            <a class="page-link" href="{{url}}" aria-label="Previous">
            <span aria-hidden="true"><<</span>
            <span class="sr-only"></span>
          </a></li>',

    'last' => '<li class="page-item">
            <a class="page-link" href="{{url}}" aria-label="Next">
            <span aria-hidden="true"><>/span>
            <span class="sr-only"></span>
          </a></li>',

    'prevActive' => '<li class="page-item">
            <a class="page-link" href="{{url}}" aria-label="Previous">
            <span aria-hidden="true"><</span>
            <span class="sr-only">Previous</span>
          </a></li>',

    'prevDisabled' => '<li class="page-item">
            <a class="page-link disabled" aria-label="Previous">
            <span aria-hidden="true"><</span>
            <span class="sr-only">Previous</span>
          </a></li>',

    'nextActive' => '<li class="page-item">
            <a class="page-link" href="{{url}}" aria-label="Next">
            <span aria-hidden="true">></span>
            <span class="sr-only"></span>
            </a>
        </li>',

    'nextDisabled' => '<li class="page-item">
            <a class="page-link disabled"  aria-label="Next">
            <span aria-hidden="true">></span>
            <span class="sr-only"></span>
            </a>
            </li>',

    'current' => '<li class="page-item active">
              <a class="page-link"><span class="sr-only">(current)</span></a>
            </li>',
];