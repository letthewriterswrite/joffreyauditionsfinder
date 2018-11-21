<?php
/*
Plugin Name: JoffreyAuditionsFinder
Description: Overlays a form throughtout the site to streamline finding an audition in your location.
Plugin URI: pending
Author: Aaron Munoz
Version: 1.0
Test Domain: joffreyauditionsfinder
Domain Path: /languages

 */
//exit if file is called directly
if ( !defined('ABSPATH')){
    exit;
    
}

//if is admin area

if(is_admin())
{
    //include dependencies
    require_once plugin_dir_path(__FILE__) .  'admin/admin-menu.php';
    require_once plugin_dir_path(__FILE__) .  'admin/settings-page.php';
}

require_once plugin_dir_path(__FILE__) . 'public/joffrey-form.php';

if( !is_admin()){
        $src = plugin_dir_url(__FILE__) . 'public/css/joffrey-public.css';
        
        $theme_css = get_template();
        
        $theme_css = $theme_css . "-style";

    wp_enqueue_style('joffrey-public-style',$src,array(),null,'all');
?>

<div class="joffrey-sidenav" id="joffrey-sidenav">

        <form method="get" id="auditionForm" action="https://summer.joffreyballetschool.com/auditions-dates-and-locations?post_type=tribe_events&eventDisplay=default" onkeypress="return event.keyCode != 13;" class="transparent">
        <h1>Find Your Audition</h1>
            
<!--            <div class="tab form-group">Where are you located?
                <input type="hidden" name="tribe-bar-geoloc-lat" id="tribe-bar-geoloc-lat">
                <input type="hidden" name="tribe-bar-geoloc-lng" id="tribe-bar-geoloc-lng">
            <input id="city" name="tribe-bar-geoloc"  class="form-control col">
    
            <button type="button" id="selectCity" class="form-control">Submit City</button>
        </div>-->

        <div class="form-group tab">
        <input type="hidden" id="tribe_state" name="tribe_state">
        <select id="state" class="form-control">
       <option disabled selected value>--select a state--</option>           
       <option class="select2-results-dept-0 select2-result select2-result-selectable select2-highlighted" role="presentation">
          Alabama
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Alberta
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Ancona
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Arizona
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Arkansas
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Belo Horizonte
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          British Columbia
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Buenos Aires
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Caba
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          California
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Cascade
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Caserta
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Colorado
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Connecticut
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Dublin
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          England
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Florida
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Genova
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Georgia
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Guayaquil
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Illinois
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Indiana
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Iowa
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Jalisco
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Kansas
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Kentucky
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Lecce
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Louisiana
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Maine
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Maryland
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Massachusetts
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Melbourne
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Mexico City
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Michigan
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Milan
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Minnesota
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Missouri
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Montana
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Montevideo
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Nevada
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          New Mexico
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          New South Wales
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          New York
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          North Carolina
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Odense C
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Ohio
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Oklahoma
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Ontario
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Oregon
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Panama City
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Pennsylvania
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Port of Spain
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Quebec
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Queensland
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Roma
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          San Jose del Cabo
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Sao Paulo
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          South Carolina
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Stockholm
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Sydney
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Tennessee
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Texas
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Utah
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Verona
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Virginia
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Washington
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          West Virginia
       </option>
       <option class="select2-results-dept-0 select2-result select2-result-selectable" role="presentation">
          Wisconsin
       </option>

            </select>
            <button type="button" id="selectState" class="form-control">Submit State</button>
        </div>

<!--        <div class="form-group tab">
            <label id="genreLabel">Select your genres(optional) </label> 
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tribe_tags[]" value="300"/>
                <label class="form-check-label">Ballet</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tribe_tags[]" value="307"/>
                <label class="form-check-label">Hip Hop</label>
            </div>
            <div class="form-check form-check-inline">   
                <input class="form-check-input" type="checkbox" name="tribe_tags[]" value="303"/>
                <label class="form-check-label">Jazz/Contemporary</label>
            </div>
            <div class="form-check form-check-inline">   
                <input class="form-check-input" type="checkbox" name="tribe_tags[]" value="304"/>
                <label class="form-check-label">Musical Theater</label>
            </div>
            <div class="form-check form-check-inline">  
                <input class="form-check-input" type="checkbox" name="tribe_tags[]" value="306"/>
                <label class="form-check-label">Tap</label>
            </div>
            <input type="submit" id="findAudition" value="Find Audition" class="form-control">
        </div>-->


        </form>
        <button class="btn" id="findaudition-btn">FIND YOUR AUDITION</button>
        


    </div>

<?php }?>