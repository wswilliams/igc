/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {





    //Examples of how to assign the Colorbox event to elements

    $(".group1").colorbox({rel: 'group1'});

    $(".group2").colorbox({rel: 'group2', transition: "fade"});

    $(".group3").colorbox({rel: 'group3', transition: "none", width: "75%", height: "75%"});
    $(".group6").colorbox({rel: 'group6', transition: "none", width: "75%", height: "75%"});
    $(".group7").colorbox({rel: 'group7', transition: "none", width: "75%", height: "75%"});
    $(".group8").colorbox({rel: 'group8', transition: "none", width: "75%", height: "75%"});
    $(".group9").colorbox({rel: 'group9', transition: "none", width: "75%", height: "75%"});

    $(".group4").colorbox({rel: 'group4', slideshow: true});

    $(".ajax").colorbox();

    $(".youtube").colorbox({iframe: true, innerWidth: 640, innerHeight: 390});

    $(".vimeo").colorbox({iframe: true, innerWidth: 500, innerHeight: 409});

    $(".iframe").colorbox({iframe: true, width: "100%", height: "100%"});

                        $(".inline").colorbox({inline: true, width: "90%"});

                        $(".callbacks").colorbox({
                            onOpen: function() {
                                alert('onOpen: colorbox is about to open');
                            },
                            onLoad: function() {
                                alert('onLoad: colorbox has started to load the targeted content');
                            },
                            onComplete: function() {
                                alert('onComplete: colorbox has displayed the loaded content');
                            },
                            onCleanup: function() {
                                alert('onCleanup: colorbox has begun the close process');
                            },
                            onClosed: function() {
                                alert('onClosed: colorbox has completely closed');
                            }

                        });



                        $('.non-retina').colorbox({rel: 'group5', transition: 'none'})

                        $('.retina').colorbox({rel: 'group5', transition: 'none', retinaImage: true, retinaUrl: true});



                        //Example of preserving a JavaScript event for inline calls.

                        $("#click").click(function() {

                            $('#click').css({"background-color": "#f00", "color": "#fff", "cursor": "inherit"}).text("Open this window again and this message will still be here.");

                            return false;

                        });

                    });