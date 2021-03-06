<?php

/* rvl_plugin_options.html */
class __TwigTemplate_e8eece6d4c9d12e592a7329dbce119dba3639f8782f6c3e5091cbcf5be0c5c08 extends Twig_Template
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
        echo "                    <h3><a name=\"YouTubeOptions\">YouTube Options</a></h3>
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Option Name</th>
                                <th colspan=\"2\">Default Setting</th>
                                <th>Shortcode Parameters</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Related Videos</td>
                                <td>
                                    <input name=rvl_options_field[disable_youtube_related_videos]
                                        id=\"rvl-youtube-realted-videos\"
                                        type=\"checkbox\" value=\"1\" 
                                        ";
        // line 18
        if (isset($context["disable_youtube_related_videos"])) { $_disable_youtube_related_videos_ = $context["disable_youtube_related_videos"]; } else { $_disable_youtube_related_videos_ = null; }
        if ($_disable_youtube_related_videos_) {
            echo "checked=\"checked\"";
        }
        echo " />
                                </td>
                                <td><label for=\"rvl-youtube-realted-videos\">
                                    Disable related viedos at video&nbsp;end</label></td>
                                <td><code>rel</code>, <code>norel</code></td>
                                <td>
                                    YouTube typically displays thumbnails of videos it
                                    feels are related to what was just shown at the end
                                    of a video.  This option can modify this&nbsp;behavior.
                                </td>
                            </tr>
                            <tr>
                                <td>Autoplay</td>
                                <td>
                                    <input name=\"rvl_options_field[enable_youtube_autoplay]\"
                                        id=\"rvl-youtube-autoplay\"
                                        type=\"checkbox\" value=\"1\" 
                                        ";
        // line 35
        if (isset($context["enable_youtube_autoplay"])) { $_enable_youtube_autoplay_ = $context["enable_youtube_autoplay"]; } else { $_enable_youtube_autoplay_ = null; }
        if ($_enable_youtube_autoplay_) {
            echo "checked=\"checked\"";
        }
        echo " />
                                </td>
                                <td><label for=\"rvl-youtube-autoplay\">
                                    Automatically Start Videos On&nbsp;Load</label></td>
                                <td><code>autoplay</code>, <code>noautoplay</code></td>
                                <td>
                                    Automatically begin playback of a video as soon as
                                    the page it's on is&nbsp;loaded.
                                </td>
                            </tr>
                            <tr>
                                <td>Disable Show Info</td>
                                <td>
                                    <input name=\"rvl_options_field[disable_youtube_showinfo]\"
                                        id=\"rvl-youtube-showinfo\"
                                        type=\"checkbox\" value=\"1\" 
                                        ";
        // line 51
        if (isset($context["disable_youtube_showinfo"])) { $_disable_youtube_showinfo_ = $context["disable_youtube_showinfo"]; } else { $_disable_youtube_showinfo_ = null; }
        if ($_disable_youtube_showinfo_) {
            echo "checked=\"checked\"";
        }
        echo " />
                                </td>
                                <td><label for=\"rvl-youtube-showinfo\">
                                    Disable title and extra info before&nbsp;playback</label></td>
                                <td><code>showinfo</code>, <code>noshowinfo</code></td>
                                <td>
                                    Whether or not to allow the player to display information
                                    like the video title and uploader before the video starts playing.
                                    By default, the info is displayed.  <strong>NOTE</strong>: This option
                                    is slightly at odds with <code>modestbranding</code>.  If you disable
                                    showinfo, YouTube branding will be shown regardless of the 
                                    modestbranding&nbsp;setting.
                                </td>
                            </tr>
                            <tr>
                                <td>Modest Branding</td>
                                <td>
                                    <input name=\"rvl_options_field[enable_modest_branding]\"
                                        id=\"rvl-modest-branding\"
                                        type=\"checkbox\" value=\"1\" ";
        // line 70
        if (isset($context["enable_modest_branding"])) { $_enable_modest_branding_ = $context["enable_modest_branding"]; } else { $_enable_modest_branding_ = null; }
        if ($_enable_modest_branding_) {
            echo "checked=\"checked\"";
        }
        echo " />
                                </td>
                                <td><label for=\"rvl-modest-branding\">Enable Modest Branding</label></td>
                                <td><code>modestbranding</code>, <code>nomodestbranding</code></td>
                                <td>
                                    Prevent the YouTube logo from displaying in the control
                                    toolbar. A small YouTube text label will appear in the
                                    info bar if a user hovers their mouse over a 
                                    paused&nbsp;video.
                                </td>
                            </tr>
                            <tr>
                                <td>Window Mode</td>
                                <td>
                                    <select name=\"rvl_options_field[youtube_wmode]\"
                                        id=\"rvl-youtube-wmode\">
                                        <option value=\"none\" ";
        // line 86
        if (isset($context["youtube_wmode"])) { $_youtube_wmode_ = $context["youtube_wmode"]; } else { $_youtube_wmode_ = null; }
        if (("none" == $_youtube_wmode_)) {
            echo "selected=\"selected\"";
        }
        echo ">None</option>
                                        <option value=\"transparent\" ";
        // line 87
        if (isset($context["youtube_wmode"])) { $_youtube_wmode_ = $context["youtube_wmode"]; } else { $_youtube_wmode_ = null; }
        if (("transparent" == $_youtube_wmode_)) {
            echo "selected=\"selected\"";
        }
        echo ">Transparent</option>
                                        <option value=\"opaque\" ";
        // line 88
        if (isset($context["youtube_wmode"])) { $_youtube_wmode_ = $context["youtube_wmode"]; } else { $_youtube_wmode_ = null; }
        if (("opaque" == $_youtube_wmode_)) {
            echo "selected=\"selected\" ";
        }
        echo ">Opaque</option>
                                    </select>
                                </td>
                                <td><label for=\"rvl-youtube-wmode\">
                                    Default Window Mode</label></td>
                                <td><code>wmode_none</code>, <code>wmode_transparent</code>, <code>wmode_opaque</code></td>
                                <td>
                                    Window Mode is traditionally a flash thing 
                                    that affects whether or not the background of your 
                                    movie is transparent, and also can affect whether 
                                    or not hardware acceleration is used during 
                                    playback. Oddly, with YouTube's iframe embeds 
                                    (such as those used in this plugin), it can also 
                                    affect z-index. Setting the wmode to \"transparent\" 
                                    should fix this behavior, but your mileage 
                                    may&nbsp;vary.
                                </td>
                            </tr>
                            <tr>
                                <td>Theme</td>
                                <td>
                                    <select name=\"rvl_options_field[youtube_theme]\"
                                        id=\"rvl-youtube-theme\">
                                        <option value=\"dark\" ";
        // line 111
        if (isset($context["youtube_theme"])) { $_youtube_theme_ = $context["youtube_theme"]; } else { $_youtube_theme_ = null; }
        if (("dark" == $_youtube_theme_)) {
            echo "selected=\"selected\"";
        }
        echo ">Dark</option>
                                        <option value=\"light\" ";
        // line 112
        if (isset($context["youtube_theme"])) { $_youtube_theme_ = $context["youtube_theme"]; } else { $_youtube_theme_ = null; }
        if (("light" == $_youtube_theme_)) {
            echo "selected=\"selected\" ";
        }
        echo ">Light</option>
                                    </select>
                                </td>
                                <td><label for=\"rvl-youtube-theme\">
                                    Default Theme</label></td>
                                <td><code>dark_theme</code>, <code>light_theme</code></td>
                                <td>
                                    Typically the default dark theme is used, but
                                    YouTube does offer a light variant that might be
                                    a better fit for your&nbsp;site.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class=\"submit\">
                        <input type=\"submit\" class=\"button-primary\" value=\"Save Settings\" />
                        <input type=\"hidden\" name=\"action\" value=\"update\" />
                    </p>
                    <h3><a name=\"YouTubeSyntax\">YouTube Shortcode Syntax &amp; Options</a></h3>
                    <p>
                        Simply include the URL or video id inside a [responsive_youtube] shortcode, like this:
                        <code>[responsive_youtube soagYwfgfxc]</code>, <br />or this: 
                        <code>[responsive_youtube https://www.youtube.com/watch?v=soagYwfgfxc]</code>. In the
                        table above, you'll notice the options in the \"Shortcode Parameters\" column.  These can
                        be added to the shortcode in order to override one of the defaults or set an option
                        on a one-off basis.  For example, should you choose to use the light theme instead of the 
                        default dark theme on your about page which has a custom template the light theme would look
                        good with, you could use the following shortcode <code>[responsive_tube soagYwfgfxc light_theme]</code>.
                        Also, you can use more than one parameter at a time, so 
                        <code>[responsive_tube soagYwfgfxc light_theme autoplay]</code> is also valid.
                    </p>
                    <h3 style=\"padding-top: 18px;\"><a name=\"VimeoOptions\">Vimeo Options</a></h3>
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Option Name</th>
                                <th colspan=\"2\">Default Setting</th>
                                <th>Shortcode Parameters</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Title Display</td>
                                <td>
                                    <input name=rvl_options_field[disable_vimeo_title_display]
                                        id=\"rvl-vimeo-title-display\"
                                        type=\"checkbox\" value=\"1\" 
                                        ";
        // line 160
        if (isset($context["disable_vimeo_title_display"])) { $_disable_vimeo_title_display_ = $context["disable_vimeo_title_display"]; } else { $_disable_vimeo_title_display_ = null; }
        if ($_disable_vimeo_title_display_) {
            echo "checked=\"checked\"";
        }
        echo " />
                                </td>
                                <td><label for=\"rvl-vimeo-title-display\">
                                    Disable the display of the video&nbsp;title</label></td>
                                <td><code>title</code>, <code>notitle</code></td>
                                <td>
                                    The title of the video typically displays in a bar that stretches
                                    across the top of video when it's not playing back.
                                </td>
                            </tr>
                            <tr>
                                <td>Byline Display</td>
                                <td>
                                    <input name=\"rvl_options_field[disable_vimeo_byline_display]\"
                                        id=\"rvl-vimeo-byline\"
                                        type=\"checkbox\" value=\"1\" 
                                        ";
        // line 176
        if (isset($context["disable_vimeo_byline_display"])) { $_disable_vimeo_byline_display_ = $context["disable_vimeo_byline_display"]; } else { $_disable_vimeo_byline_display_ = null; }
        if ($_disable_vimeo_byline_display_) {
            echo "checked=\"checked\"";
        }
        echo " />
                                </td>
                                <td><label for=\"rvl-vimeo-byline\">
                                    Disable the display of the&nbsp;byline</label></td>
                                <td><code>byline</code>, <code>nobyline</code></td>
                                <td>
                                    Typically displayed underneath the video title.
                                </td>
                            </tr>
                            <tr>
                                <td>Portrait Display</td>
                                <td>
                                    <input name=\"rvl_options_field[disable_vimeo_portrait_display]\"
                                        id=\"rvl-vimeo-portrait\"
                                        type=\"checkbox\" value=\"1\" ";
        // line 190
        if (isset($context["disable_vimeo_portrait_display"])) { $_disable_vimeo_portrait_display_ = $context["disable_vimeo_portrait_display"]; } else { $_disable_vimeo_portrait_display_ = null; }
        if ($_disable_vimeo_portrait_display_) {
            echo "checked=\"checked\"";
        }
        echo " />
                                </td>
                                <td><label for=\"rvl-vimeo-portrait\">Disable the display of the user&nbsp;portrait</label></td>
                                <td><code>portrait</code>, <code>noportrait</code></td>
                                <td>
                                    Typically displayed in the upper left corner of the video.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class=\"submit\">
                        <input type=\"submit\" class=\"button-primary\" value=\"Save Settings\" />
                        <input type=\"hidden\" name=\"action\" value=\"update\" />
                    </p>
                    <h3><a name=\"VimeoSyntax\">Vimeo Shortcode Syntax &amp; Options</a></h3>
                    <p>
                        Similarly to the YouTube syntax, simply include the URL or 
                        video id inside a [responsive_vimeo] shortcode, like this:
                        <br /><code>[responsive_vimeo 29506088]</code>, or this: 
                        <code>[responsive_vimeo https://vimeo.com/29506088]</code>. 
                        In the table above, you'll notice the options in the \"Shortcode 
                        Parameters\" column.  These can be added to the shortcode in 
                        order to override one of the defaults or set an option on 
                        a one-off basis.  For example, should you choose to include
                        the title of a video after disabling it her in the defaults, 
                        you could use the following shortcode <code>[responsive_vimeo 29506088 title]</code>.
                    </p>
                </form>
            
            </div>
            <div class=\"col-md-3\">
                <nav class=\"rvl-admin\">
                    <h4>Table of Contents</h4>
                    <ol>
                        <li><a href=\"#Introduction\">Introduction</a></li>
                        <li><a href=\"#YouTubeOptions\">YouTube Options</a></li>
                        <li><a href=\"#YouTubeSyntax\">YouTube Shortcode Syntax</a></li>
                        <li><a href=\"#VimeoOptions\">Vimeo Options</a></li>
                        <li><a href=\"#VimeoSyntax\">Vimeo Shortcode Syntax</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "rvl_plugin_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 190,  256 => 176,  234 => 160,  180 => 112,  173 => 111,  144 => 88,  137 => 87,  130 => 86,  108 => 70,  83 => 51,  61 => 35,  38 => 18,  19 => 1,);
    }
}
