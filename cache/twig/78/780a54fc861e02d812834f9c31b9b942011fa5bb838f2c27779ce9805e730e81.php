<?php

/* partials/masterslider.html.twig */
class __TwigTemplate_1463a61c3b15e1fc538c136d529c58c1770938f5fcde7cd034ba3fe50dcd16ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Above Sidebar Section-->
<div class='above-sidebar-wrapper'>
        <div class='gdlr-color-wrapper  gdlr-show-all no-skin' style='padding-top: 0px; padding-bottom: 30px; '>
            <div class='container'>
                <div class='gdlr-master-slider-item gdlr-slider-item gdlr-item'>
                    <!-- MasterSlider -->
                    <div class='master-slider-parent ms-parent-id-5' id='P_MS53d5cadc7a9d0'>
                        <!-- MasterSlider Main -->
                        <div class='master-slider ms-skin-default' id='MS53d5cadc7a9d0'>
                            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "masterslider", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                                <div class='ms-slide' data-delay='6' data-fill-mode='fill'>
                                    <img alt='' data-src='";
            // line 12
            echo ($context["theme_url"] ?? null);
            echo "/images/";
            echo $this->getAttribute($context["item"], "image", array());
            echo "' src='";
            echo ($context["theme_url"] ?? null);
            echo "/images/blank.gif' title=''/>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                        </div>
                        <!-- END MasterSlider Main -->
                    </div>
                    <!-- END MasterSlider -->
                    <script>
                    (function ( \$ ) {
                        \"use strict\";

                        \$(function () {
                            var masterslider_a9d0 = new MasterSlider();

                // slider controls
                masterslider_a9d0.control('arrows'     ,{ autohide:true, overVideo:true  });                    
                masterslider_a9d0.control('circletimer',{ autohide:false, overVideo:true, color:'#272727', radius:10, stroke:2   });
                masterslider_a9d0.control('timebar'    ,{ autohide:false, overVideo:true, align:'bottom', color:'#efefef'  , width:4 });
                // slider setup
                masterslider_a9d0.setup(\"MS53d5cadc7a9d0\", {
                    width           :    ";
        // line 32
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "width", array());
        echo ",
                    height          :    ";
        // line 33
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "height", array());
        echo ",
                    space           :    ";
        // line 34
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "space", array());
        echo ",
                    start           :    ";
        // line 35
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "start", array());
        echo ",
                    grabCursor      :    ";
        // line 36
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "grabCursor", array());
        echo ",
                    swipe           :    ";
        // line 37
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "swipe", array());
        echo ",
                    mouse           :    ";
        // line 38
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "mouse", array());
        echo ",
                    layout          :    \"";
        // line 39
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "layout", array());
        echo "\",
                    wheel           :    ";
        // line 40
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "wheel", array());
        echo ",
                    autoplay        :    ";
        // line 41
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "autoplay", array());
        echo ",
                    instantStartLayers:  ";
        // line 42
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "instantStartLayers", array());
        echo ",
                    loop            :    ";
        // line 43
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "loop", array());
        echo ",
                    shuffle         :    ";
        // line 44
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "shuffle", array());
        echo ",
                    preload         :    ";
        // line 45
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "preload", array());
        echo ",
                    heightLimit     :    ";
        // line 46
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "heightLimit", array());
        echo ",
                    autoHeight      :    ";
        // line 47
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "autoHeight", array());
        echo ",
                    smoothHeight    :    ";
        // line 48
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "smoothHeight", array());
        echo ",
                    endPause        :    ";
        // line 49
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "endPause", array());
        echo ",
                    overPause       :    ";
        // line 50
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "overPause", array());
        echo ",
                    fillMode        :    \"";
        // line 51
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "fillMode", array());
        echo "\",
                    centerControls  :    ";
        // line 52
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "centerControls", array());
        echo ",
                    layersMode      :    \"";
        // line 53
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "layersMode", array());
        echo "\",
                    hideLayers      :    ";
        // line 54
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "hideLayers", array());
        echo ",
                    fullscreenMargin:    ";
        // line 55
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "fullscreenMargin", array());
        echo ",
                    speed           :    ";
        // line 56
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "speed", array());
        echo ",
                    dir             :    \"";
        // line 57
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "dir", array());
        echo "\",
                    parallaxMode    :    '";
        // line 58
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "parallaxMode", array());
        echo "',
                    view            :    \"";
        // line 59
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", array()), "view", array());
        echo "\"
                });


\$(\"head\").append( \"<link href='http://fonts.googleapis.com/css?family=Arvo:regular|Merriweather:700' id='ms-fonts' media='all' rel='stylesheet' type='text/css'/>\" );

window.masterslider_instances = window.masterslider_instances || {};
window.masterslider_instances[\"5_a9d0\"] = masterslider_a9d0;
});

})(jQuery);
</script>
</div>
<div class='clear'></div>
</div>
</div>
<div class='clear'></div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/masterslider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 59,  173 => 58,  169 => 57,  165 => 56,  161 => 55,  157 => 54,  153 => 53,  149 => 52,  145 => 51,  141 => 50,  137 => 49,  133 => 48,  129 => 47,  125 => 46,  121 => 45,  117 => 44,  113 => 43,  109 => 42,  105 => 41,  101 => 40,  97 => 39,  93 => 38,  89 => 37,  85 => 36,  81 => 35,  77 => 34,  73 => 33,  69 => 32,  50 => 15,  37 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Above Sidebar Section-->
<div class='above-sidebar-wrapper'>
        <div class='gdlr-color-wrapper  gdlr-show-all no-skin' style='padding-top: 0px; padding-bottom: 30px; '>
            <div class='container'>
                <div class='gdlr-master-slider-item gdlr-slider-item gdlr-item'>
                    <!-- MasterSlider -->
                    <div class='master-slider-parent ms-parent-id-5' id='P_MS53d5cadc7a9d0'>
                        <!-- MasterSlider Main -->
                        <div class='master-slider ms-skin-default' id='MS53d5cadc7a9d0'>
                            {% for item in site.masterslider %}
                                <div class='ms-slide' data-delay='6' data-fill-mode='fill'>
                                    <img alt='' data-src='{{ theme_url }}/images/{{ item.image }}' src='{{ theme_url }}/images/blank.gif' title=''/>
                                </div>
                            {% endfor %}
                        </div>
                        <!-- END MasterSlider Main -->
                    </div>
                    <!-- END MasterSlider -->
                    <script>
                    (function ( \$ ) {
                        \"use strict\";

                        \$(function () {
                            var masterslider_a9d0 = new MasterSlider();

                // slider controls
                masterslider_a9d0.control('arrows'     ,{ autohide:true, overVideo:true  });                    
                masterslider_a9d0.control('circletimer',{ autohide:false, overVideo:true, color:'#272727', radius:10, stroke:2   });
                masterslider_a9d0.control('timebar'    ,{ autohide:false, overVideo:true, align:'bottom', color:'#efefef'  , width:4 });
                // slider setup
                masterslider_a9d0.setup(\"MS53d5cadc7a9d0\", {
                    width           :    {{ site.masterslider_setup.width            }},
                    height          :    {{ site.masterslider_setup.height           }},
                    space           :    {{ site.masterslider_setup.space            }},
                    start           :    {{ site.masterslider_setup.start            }},
                    grabCursor      :    {{ site.masterslider_setup.grabCursor       }},
                    swipe           :    {{ site.masterslider_setup.swipe            }},
                    mouse           :    {{ site.masterslider_setup.mouse            }},
                    layout          :    \"{{ site.masterslider_setup.layout           }}\",
                    wheel           :    {{ site.masterslider_setup.wheel            }},
                    autoplay        :    {{ site.masterslider_setup.autoplay         }},
                    instantStartLayers:  {{ site.masterslider_setup.instantStartLayers }},
                    loop            :    {{ site.masterslider_setup.loop             }},
                    shuffle         :    {{ site.masterslider_setup.shuffle          }},
                    preload         :    {{ site.masterslider_setup.preload          }},
                    heightLimit     :    {{ site.masterslider_setup.heightLimit      }},
                    autoHeight      :    {{ site.masterslider_setup.autoHeight       }},
                    smoothHeight    :    {{ site.masterslider_setup.smoothHeight     }},
                    endPause        :    {{ site.masterslider_setup.endPause         }},
                    overPause       :    {{ site.masterslider_setup.overPause        }},
                    fillMode        :    \"{{ site.masterslider_setup.fillMode         }}\",
                    centerControls  :    {{ site.masterslider_setup.centerControls   }},
                    layersMode      :    \"{{ site.masterslider_setup.layersMode       }}\",
                    hideLayers      :    {{ site.masterslider_setup.hideLayers       }},
                    fullscreenMargin:    {{ site.masterslider_setup.fullscreenMargin }},
                    speed           :    {{ site.masterslider_setup.speed            }},
                    dir             :    \"{{ site.masterslider_setup.dir              }}\",
                    parallaxMode    :    '{{ site.masterslider_setup.parallaxMode     }}',
                    view            :    \"{{ site.masterslider_setup.view             }}\"
                });


\$(\"head\").append( \"<link href='http://fonts.googleapis.com/css?family=Arvo:regular|Merriweather:700' id='ms-fonts' media='all' rel='stylesheet' type='text/css'/>\" );

window.masterslider_instances = window.masterslider_instances || {};
window.masterslider_instances[\"5_a9d0\"] = masterslider_a9d0;
});

})(jQuery);
</script>
</div>
<div class='clear'></div>
</div>
</div>
<div class='clear'></div>
</div>", "partials/masterslider.html.twig", "/var/www/itsreallynot.com/user/themes/soraarticle/templates/partials/masterslider.html.twig");
    }
}
