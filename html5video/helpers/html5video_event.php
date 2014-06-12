<?php defined("SYSPATH") or die("No direct script access.");
/**
 * html5video
 * Copyright (C) 2014 Alexander Volf
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or (at
 * your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street - Fifth Floor, Boston, MA  02110-1301, USA.
 */
class html5video_event_Core {
  static function movie_img($movie_img, $theme) {
    $view = new View("videohtml5.html");
    $view->url = $movie_img->url;
    $view->max_size = $movie_img->max_size;
	$view->width = $movie_img->width;
	$view->height = $movie_img->height;
	
    array_push($movie_img->view,$view);
  }
}
