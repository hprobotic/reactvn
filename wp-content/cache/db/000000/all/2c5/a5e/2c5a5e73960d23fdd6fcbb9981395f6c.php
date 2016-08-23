��W<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:67:"SELECT reactvn_posts.* FROM reactvn_posts WHERE ID IN (139,137,134)";s:11:"last_result";a:3:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"134";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-11-25 13:23:07";s:13:"post_date_gmt";s:19:"2015-11-25 13:23:07";s:12:"post_content";s:1924:"<b>OSx86</b> (from the names OS X and x86) is a collaborative hacking project to run the <span class="nowrap">OS X</span> operating system on non-Apple personal computers with x86 architecture on x86-64 processors. The effort started soon after the June 2005 Worldwide Developers Conference announcement that Apple would be moving its personal computers from PowerPC to Intel microprocessors.

<!--more-->

A computer built to run this type of <span class="nowrap">OS X</span> is also known as a <b>Hackintosh</b>,<sup id="cite_ref-bmr_1-0" class="reference">[1]</sup> from the word "hack" and the name of Apple's main model of computers, Macintosh. Hackintoshed notebook computers are also called "Hackbooks".<sup id="cite_ref-2" class="reference">[2]</sup>

The Apple software license does not allow <span class="nowrap">OS X</span> to be used on a computer that is not "Apple-branded".<sup id="cite_ref-EULA_3-0" class="reference">[3]</sup> The legality of this form of tying is disputed by companies such as Psystar, Bizon computer, PearC and MacPC who have attempted to release products using Mac OS on non-Apple machines. However, while the methods Apple uses to prevent <span class="nowrap">OS X</span> from being installed on non-Apple hardware are protected from commercial circumvention in the United States by the Digital Millennium Copyright Act (DMCA),<sup id="cite_ref-pcworld1_4-0" class="reference">[4]</sup> specific changes to the law regarding the concept of jailbreaking has thrown such and similar circumvention methods into a grey area when carried out by end-users for personal use.<sup id="cite_ref-5" class="reference">[5]</sup><sup class="noprint Inline-Template">[<i><span title="The material near this tag failed verification of its source citation(s). (September 2012)">not</span></i></sup>

<a href="https://drive.google.com/open?id=0B_rXIv9tsF-8NTR0MmVmOXFOUGc">MultiBeast - Yosemite 7.5.0</a>";s:10:"post_title";s:33:"Hackintosh Tool - Direct download";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:31:"hackintosh-tool-direct-download";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-11-25 13:23:07";s:17:"post_modified_gmt";s:19:"2015-11-25 13:23:07";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://scriptsvn.com/?p=134";s:10:"menu_order";s:2:"12";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"137";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-11-25 13:28:42";s:13:"post_date_gmt";s:19:"2015-11-25 13:28:42";s:12:"post_content";s:19779:"<div>Recently, tonymacx86 released Multibeast 7, a version of Multibeast customized specifically for OS X Yosemite, Apple's newest version of Mac OS X. While this new version is mostly identical to its Mavericks-era predecessor, it does include a few key changes to improve compatibility. Read on for more details!</div>

<!--more-->

<a name="more"></a>
<b><u>LAST UPDATED: January 6, 2014</u></b>

<a href="http://www.tonymacx86.com/downloads.php">Multibeast</a> is a essentially an installer bundled with a lot of <a href="http://www.macbreaker.com/2012/01/what-are-kexts.html">kext files</a> for Hackintoshes. When you're setting up Mac OS X, it can be a huge time saver. By using Multibeast, you don't have to find, download, and install every single kext file that your Hackintosh needs, one by one. Multibeast has it all. However, the problem with Multibeast's all-in-one method is that there are simply too many options to make sense of. In this guide, I'm going to explain all of the important options in the app.

<b>NOTE:</b> You have to register on <a href="http://tonymacx86.com/">tonymacx86.com</a> to download Multibeast and related apps. After installing anything in Multibeast, you should reboot your Hackintosh to see if the changes worked.

Quick Start -&gt; Easybeast/UserDSDT/DSDT-Free

<div class="separator"></div>

<div class="separator"><a href="https://4.bp.blogspot.com/-XUUcYh7tDbQ/VGZg1jiD4uI/AAAAAAAAF0c/-xPPpdIHl-I/s1600/Region%2Bcapture%2B5.png"><img src="https://4.bp.blogspot.com/-XUUcYh7tDbQ/VGZg1jiD4uI/AAAAAAAAF0c/-xPPpdIHl-I/s1600/Region%2Bcapture%2B5.png" alt="" width="640" height="516" border="0" /></a></div>

These options are the cornerstone of the tonymacx86 method; installing any of these three options will enable Mac OS X to boot normally from the hard drive of your Hackintosh, without any extra assistance.

<b>DSDT Free</b> is the the most common option these days. You should choose "DSDT Free" if your computer has a motherboard that <a href="http://www.macbreaker.com/2012/08/set-up-hackintosh-gigabyte-uefi.html">uses UEFI instead of BIOS</a> (a.k.a virtually every board made from 2012 onwards). Installing it is very simple-- just set it and forget it.

However, installing DSDT Free by itself isn't always enough to make Mac OS X boot properly. If you're using an <a href="https://en.wikipedia.org/wiki/Haswell_(microarchitecture)">Intel Haswell processor</a> and your motherboard doesn't support Mac OS X's CPU power management by default, you'll also have to manually patch the OS X kernel yourself to get things working (<a href="http://www.tonymacx86.com/mavericks-laptop-support/114677-haswell-early-reboot-mavericks-locked-msrs-hp-envy-15-j063cl-i7-4700mq.html">check out the "How to patch your kernel" section of this tonymacx86 guide</a> for more details). Alternatively, if you're using an older Intel processor and your motherboard doesn't support OS X power management by default, you'll have to either <a href="http://www.macbreaker.com/2012/11/how-to-set-up-asus-hackintosh.html">manually patch your motherboard's BIOS</a>, install NullCPUPowerManagement (mentioned below in this guide), <i>or</i> install a patched version of AppleIntelCPUPower Management (also mentioned below).

<b>UserDSDT</b> is the best option if your motherboard needs a DSDT file, which is a configuration file that customizes Mac OS X to work with your specific board. Usually, only older motherboards that still use BIOS instead of UEFI will need this option.

If your motherboard has a DSDT file available in the <a href="http://www.tonymacx86.com/content/11-dsdt-database.html">DSDT section of tonymacx86</a>, use it. (You can also <a href="http://www.macbreaker.com/2014/03/how-to-edit-your-own-dsdt-with-maciasl.html">create your own DSDT file with MaciASL</a>, although this is usually unnecessary.) To install UserDSDT on Mac OS X this way, you first have to download the appropriate DSDT file onto your Hackintosh. Then you open Multibeast, and select the UserDSDT option; Multibeast will ask you to select your DSDT file, and you'll be good to go.

When installing UserDSDT with a DSDT file, make sure that your motherboard has <a href="http://www.macbreaker.com/2012/02/check-bios-version-of-gigabyte.html">the right BIOS version</a>, or the DSDT file won't work. For example, a DSDT file for version F4 won't work if your motherboard has version F1. Read <a href="http://www.macbreaker.com/2012/01/how-to-update-your-bios-on-gigabyte.html">this</a> to learn how to update your BIOS version.

<b>Easybeast</b> is similar to UserDSDT, except it tries to remove the need for a DSDT file by installing some extra kext files. If your motherboard needs a DSDT file but doesn't have one, try installing Easybeast instead. Easybeast will break sleep mode and speedstepping (CPU power management-- this means that your computer will be less energy efficient). It doesn't work if your computer uses an Intel Haswell processor, due to incompatibilities with NullCPUPowerManagement.

Drivers -&gt; Audio

<div class="separator"></div>

<div class="separator"><a href="https://1.bp.blogspot.com/-L1ITYy-veUY/VGZhmeCHqPI/AAAAAAAAF0k/86Rux6z57UE/s1600/Region%2Bcapture%2B6.png"><img src="https://1.bp.blogspot.com/-L1ITYy-veUY/VGZhmeCHqPI/AAAAAAAAF0k/86Rux6z57UE/s1600/Region%2Bcapture%2B6.png" alt="" width="640" height="512" border="0" /></a></div>

All of the motherboards recommended by tonymacx86 use Realtek Audio. To enable sound on these motherboards, you'll want to install the <b>Realtek ALC8xx</b> kexts. Luckily, the Realtek ALC8xx section of Multibeast 5 is pretty straightforward.

<div class="separator"></div>

All you need to know is the audio codec of your motherboard. You can find your audio codec by Googling the model of your motherboard. The first Google result will be the motherboard's official product page. The audio codec is usually found under the "Specifications" section, or some other similarly-named section. For example, my Hackintosh has a Gigabyte GA-P67A-D3-B3 motherboard. According to the <a href="http://www.gigabyte.com/products/product-page.aspx?pid=3800#sp">official product page</a>, this motherboard uses the Realtek 889 codec. So I would choose "ALC889" under the "Realtek ALCxxx" section to enable audio.

If your Hackintosh is specifically using the <a href="http://sourceforge.net/projects/cloverefiboot/">Clover EFI bootloader</a> (which we generally don't support here on MacBreaker) instead of the normal Chameleon or Chimera bootloader, you will have to check <b>Optional EFI Installed Bootloader Support</b> for any of these audio options to work properly.

If you have a motherboard that doesn't use the Realtek audio codec (or it has an unsupported codec version), you'll have to go with the <b>Universal</b> kexts. VoodooHDA enables sound for a wide variety of motherboards, but it's not very reliable. Install just <i>one</i> of the versions and reboot to see if it works well for you. If not, remove the kext by going to /System/Library/Extensions in your hard drive and deleting VoodooHDA.kext. Then try another version.

Drivers -&gt; Disk

<div class="separator"></div>

<div class="separator"><a href="https://4.bp.blogspot.com/-Kdk0sH7H-nE/VGZkZthHhYI/AAAAAAAAF0w/UeZHFBWsV9o/s1600/Region%2Bcapture%2B7.png"><img src="https://4.bp.blogspot.com/-Kdk0sH7H-nE/VGZkZthHhYI/AAAAAAAAF0w/UeZHFBWsV9o/s1600/Region%2Bcapture%2B7.png" alt="" width="640" height="514" border="0" /></a></div>

Almost all hard drives should work with Mac OS X by default, but you still might encounter glitches here and there. These kexts fix hard drive-related problems.

For example, on some Hackintoshes, your hard drives will show up as orange external drives on your desktop. Install<b>IOAHCI Block Storage Injector</b> to fix that (this kext should be unnecessary on Hackintoshes that use UserDSDT or DSDT Free).

If your Hackintosh uses a relatively new motherboard with the Intel 9 series chipset (this includes Z97, H97, X79, and X99 motherboards), you may need to install <b>Intel Generic AHCI SATA</b> in order for Mac OS X to recognize your hard drives properly.

You can also install <b>TRIM Enabler</b> to enable TRIM in Mac OS X, which is a critical feature for <a href="http://www.macbreaker.com/2012/05/hackintosh-ssds-all-you-need-to-know.html">SSD drives</a>.

Drivers -&gt; Graphics

<div class="separator"></div>

<div class="separator"><a href="https://2.bp.blogspot.com/-rzuCqnFLNyY/VGZlCtgNLWI/AAAAAAAAF04/xJfAzGJ30Rc/s1600/Region%2Bcapture%2B8.png"><img src="https://2.bp.blogspot.com/-rzuCqnFLNyY/VGZlCtgNLWI/AAAAAAAAF04/xJfAzGJ30Rc/s1600/Region%2Bcapture%2B8.png" alt="" width="640" height="514" border="0" /></a></div>

These days, many graphics cards work out of the box in Mac OS X, without the need for extra drivers. As a result, there isn't much to see in the Graphics section of Multibeast. Check out our <a href="http://www.macbreaker.com/2012/06/hackintosh-graphics-cards.html">graphics card guide</a> for more details.

Right now, the only thing in this section is the <b>Intel Graphics Patch for Mixed Configurations</b>. Intel's 2nd-generation "Sandy Bridge" processors are compatible with their 3rd-generation "Ivy Bridge" motherboards. The same is true the other way around: Ivy Bridge processors are also compatible with Sandy Bridge motherboards. However, building your Hackintosh with these mixed configurations prevents your processor's integrated graphics from working properly in Mac OS X. You need to install this patch to fix the problem.

Drivers -&gt; Miscellaneous/System

<div class="separator"></div>

<div class="separator"></div>

<div class="separator"><a href="https://1.bp.blogspot.com/-S-dMq-X1BSE/VGZlHQd1WlI/AAAAAAAAF1A/F2eZSGe3ev4/s1600/Region%2Bcapture%2B9.png"><img src="https://1.bp.blogspot.com/-S-dMq-X1BSE/VGZlHQd1WlI/AAAAAAAAF1A/F2eZSGe3ev4/s1600/Region%2Bcapture%2B9.png" alt="" width="640" height="518" border="0" /></a></div>

The Miscellaneous and System sections contain kexts that fix random issues in Mac OS X. In Multibeast 7, the difference between these two sections is very unclear, so I've included explanations for both sections.

<div class="separator"></div>

<div class="separator"></div>

<div class="separator"></div>

<b>NullCPUPowerManagement</b> (NCPM) fixes boot errors caused by Apple's CPU power management service. These errors happen on Hackintoshes that don't work with just UserDSDT or DSDT Free alone. Installing NCPM breaks sleep mode and speed-stepping (CPU power management). This kext is installed by default when you run Easybeast. It no longer works on motherboards for <a href="https://en.wikipedia.org/wiki/Haswell_(microarchitecture)">Intel "Haswell" processors</a> (a.k.a most boards made in 2013 or newer).

The <b>FakeSMC Plugins</b> are a set of plugins that enable system-monitoring apps to read your Hackintosh's CPU temperature and GPU temperature.
Installing <b>USB 3.0 - Universal</b> enables USB 3.0 support on Hackintoshes. In the past, USB 3.0 was a rather hit-and-miss feature for Hackintoshes: it worked for some people, and caused booting errors for others. Support has gotten better over time, however. These days, you can usually expect USB 3.0 to work as long as you install these drivers.

If you're using an older mouse or keyboard that doesn't connect to your Hackintosh with a USB port, install <b>PS/2 Keyboard/Mice</b>.

If your Hackintosh <a href="http://www.tonymacx86.com/general-hardware-discussion/127513-os-x-10-9-2-compatibility-report-socket-2011-a.html">uses an Intel Xeon CPU in the "Ivy Bridge-E" product line</a>, you'll probably have to install<b>VoodooTSCSync</b> to boot Mac OS X properly. The installation process is pretty simple: if your CPU has 4 processor cores, choose "VoodooTSCSync 4 Core". And so on. Sometimes, you'll also need to install this option in conjunction with NullCPUPowerManagement.

<div class="separator"><a href="https://2.bp.blogspot.com/-3TZIZj3FBWs/VGZnkAKNurI/AAAAAAAAF1U/2-Lv6bgiKXs/s1600/Region%2Bcapture%2B11.png"><img src="https://2.bp.blogspot.com/-3TZIZj3FBWs/VGZnkAKNurI/AAAAAAAAF1U/2-Lv6bgiKXs/s1600/Region%2Bcapture%2B11.png" alt="" width="640" height="518" border="0" /></a></div>

<b>Patched Apple Intel CPU Power Management</b> is an alternative to NullCPUPowerManagement. It does the same thing as NCPM, except it doesn't break sleep mode or speed-stepping. These patches are version-specific, so every time you update Mac OS X, you'll have to install a new version of the patch (although the most recent 10.9 patch actually works for all versions of 10.9 <i>and</i> 10.10!). Like with NullCPUPowerManagement, however, this kext no longer works on motherboards for <a href="https://en.wikipedia.org/wiki/Haswell_(microarchitecture)">Intel "Haswell" processors</a> (a.k.a most boards made in 2013 or newer).

Mac OS X Lion 10.7.4 removed support for X58 motherboards, making Hackintoshes that use these motherboards unable to boot without help in Mountain Lion, even after installing UserDSDT, DSDT Free, or Easybeast. Also, many non-Gigabyte motherboards encountered booting problems in OS X Mountain Lion version 10.8.2 due to driver incompatibilities. If your Hackintosh cannot start normally due to either of these problems, boot into OS X with the help of your Unibeast USB drive (or <a href="http://www.macbreaker.com/p/installation-guides.html">whatever installer USB drive you used</a>), and install <b>AppleACPIPlatform Rollback.</b>

Drivers -&gt; Network

<div class="separator"></div>

<div class="separator"><a href="https://2.bp.blogspot.com/-0V6_V4cMoHc/VGZoFtPD_AI/AAAAAAAAF1c/3kqOLOpi99s/s1600/Region%2Bcapture%2B10.png"><img src="https://2.bp.blogspot.com/-0V6_V4cMoHc/VGZoFtPD_AI/AAAAAAAAF1c/3kqOLOpi99s/s1600/Region%2Bcapture%2B10.png" alt="" width="640" height="514" border="0" /></a></div>

These kexts should enable connecting to the internet on your Hackintosh, via an Ethernet cord. To find out which kext you need to install, you need to know what ethernet controller your motherboard has.

<div class="separator"></div>

<div class="separator"></div>

Different manufacturers use different controllers; check what controller your motherboard uses by Googling your board's name (or model number) to find the official manufacturer webpage for it. Most manufacturers list the ethernet controller of a motherboard under the "Specifications" section of its official page.

If your motherboard uses something in Realtek 8100 series of Ethernet controllers (e.g. my old Gigabyte GA-P67A-D3-B3 motherboard used the "Realtek RTL8111E" controller), try installing <b>Realtek - AppleRTL8169Ethernet</b> first. If that doesn't work, try installing <b>RealtekRTL81xx</b> or <b>RealtekRTL8111</b> instead; these alternative options work better for some people.

The same suggestion applies for all of the other options: <b>ALXEthernet</b> and <b>AtherosL1cEthernet </b>both work on motherboards with Atheros AR8100-series ethernet controllers. If installing one option doesn't work, try the other. <b>Killer ALXEthernet </b>and <b>AtherosE2200Ethernet</b> both work on boards with Atheros Killer E2200-series controllers.<b>AppleIntelE1000e </b>and <b>AppleIGB</b> both work on motherboards with Intel 82500-series controllers (although AppleIGB also works on Intel i250, i210, and i211 controllers).

Customization -&gt; Boot Options

<div class="separator"></div>

<div class="separator"><a href="https://1.bp.blogspot.com/-49DIcEDZ8PY/VGZqlmOgRhI/AAAAAAAAF1o/g2YUKZHuSco/s1600/Region%2Bcapture%2B12.png"><img src="https://1.bp.blogspot.com/-49DIcEDZ8PY/VGZqlmOgRhI/AAAAAAAAF1o/g2YUKZHuSco/s1600/Region%2Bcapture%2B12.png" alt="" width="640" height="512" border="0" /></a></div>

Most of the options in this section make edits to org.Chameleon.boot.plist, a settings file that configures how your Hackintosh boots. If you want, you can also <a href="http://www.macbreaker.com/2012/01/how-to-use-boot-flags-for-your.html">make all of these changes manually</a>. Check out our <a href="http://www.macbreaker.com/2012/01/list-of-common-hackintosh-boot-flags_29.html">list of common boot options</a> for more details.

Installing <b>1080p</b> will tell Mac OS X to display the Apple bootscreen at 1920x1080 resolution during start up. This feature is not supported on all graphics cards (to enable it on unsupported NVIDIA cards, read our guide on editing <a href="http://www.macbreaker.com/2012/06/how-to-set-your-hackintosh-bootscreen.html">VESA resolutions</a>). In addition, this feature only works once you enable full graphics support on your Hackintosh.

If you want your Hackintosh to let your choose your own hard drive at the bootscreen instead of just automatically loading Mac OS X, you can install <b>Instant Menu</b> to fix that.

<i>Uncheck </i><b>Generate CPU States</b> if your Hackintosh has a <a href="https://en.wikipedia.org/wiki/Haswell_(microarchitecture)#Haswell_Refresh">Haswell "Refresh"</a> Intel Core processor (a.ka. pretty much anything made in 2014 or newer). Generating CPU states usually helps Mac OS X's power management work with your computer, but it may also cause freezing if your computer uses a new processor that is still unsupported by Apple.

Customization -&gt; System Definitions

<div class="separator"></div>

<div class="separator"><a href="https://1.bp.blogspot.com/-KY1fzZ-ejj0/VGZswF5WIRI/AAAAAAAAF10/tt8WTLxN-dM/s1600/Region%2Bcapture%2B13.png"><img src="https://1.bp.blogspot.com/-KY1fzZ-ejj0/VGZswF5WIRI/AAAAAAAAF10/tt8WTLxN-dM/s1600/Region%2Bcapture%2B13.png" alt="" width="640" height="510" border="0" /></a></div>

System Definitions pretend that your Hackintosh is a real Mac. The <b>Mac Pro (3,1)</b> system definition is installed by default with UserDSDT, DSDT Free, and Easybeast.

<div class="separator"></div>

Occasionally, a certain System Definition will make your Hackintosh run a lot slower than it should. <a href="http://www.primatelabs.ca/geekbench/">Geekbench</a> is a good benchmark to compare your Hackintosh against other Hackintoshes and Macs (the free trial lasts forever). If you feel that your Geekbench score is unusually slow compared to Hackintoshes or Macs with similar hardware, try installing a different System Definition.

In most cases, any system definition will work. The most notable exceptions are the the <b>Mac Pro (4,1) </b>and <b>Mac Pro (5,1)</b>system definitions, which cause booting problems. If you insist on installing either of these two system definitions, be sure to remove AppleTyMCEDriver.kext and AppleGraphicsPowerManagement.kext from /System/Library/Extensions beforehand (the system definitions mess up these two kexts).

Build -&gt; Install

<div class="separator"></div>

<div class="separator"><a href="https://3.bp.blogspot.com/-vlo3v02eIFc/VGZszbDvXqI/AAAAAAAAF18/7SejC-bEDbs/s1600/Region%2Bcapture%2B14.png"><img src="https://3.bp.blogspot.com/-vlo3v02eIFc/VGZszbDvXqI/AAAAAAAAF18/7SejC-bEDbs/s1600/Region%2Bcapture%2B14.png" alt="" width="640" height="518" border="0" /></a></div>

Once you have selected the appropriate options for your Hackintosh, click on the "Build" tab. This page will list all of the options that you have selected. Click on the "Install" button to began the installation-- most of the time, the installation will take a few minutes to complete.

Remember, Multibeast does not allow you to uninstall options. If you want to uninstall any of the kexts from Multibeast, you will have to manually remove them from <b>/System/Library/Extensions</b> in your hard drive. As a corollary, you do not have to reinstall your previously-installed options every time you run Multibeast-- since Multibeast cannot uninstall anything, its effect is cumulative.";s:10:"post_title";s:59:"How to use Multibeast 7: a comprehensive guide for Yosemite";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:58:"how-to-use-multibeast-7-a-comprehensive-guide-for-yosemite";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-11-25 13:28:42";s:17:"post_modified_gmt";s:19:"2015-11-25 13:28:42";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://scriptsvn.com/?p=137";s:10:"menu_order";s:2:"11";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"139";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-11-25 16:53:30";s:13:"post_date_gmt";s:19:"2015-11-25 16:53:30";s:12:"post_content";s:2182:"If you  running on Hackintosh, you will can't use BootCamp, but you can try this method with the terminal.

<!--more-->

<ol>
<li>Download the ISO you want to use</li>
<li>Open Terminal (in /Applications/Utilities)</li>
</ol>

2.1 Navigate to the path where the .iso file is located

2.2 Use ls to list all the folders

2.3 cd /path/to/iso to dive in to folder or cd .. to go back the path

Convert .iso to .img using hdiutil:
hdiutil convert -format UDRW -o /path/to/target.img /path/to/source.iso
Rename if OS X gave it a .dmg ending:
mv /path/to/target.img.dmg path/to/target.img
Type diskutil list to get a list of currently connected devices
Insert USB drive you want to use
Run diskutil list again to see what your USB stick gets assigned eg - /dev/disk3
Run diskutil unmountDisk /dev/diskN (where N is the number assigned to your USB stick, in previous example it would be 3)
Run sudo dd if=/path/to/target.img of=/dev/diskN bs=1m (if you get an error, replace bs=1m with bs=1M
Run diskutil eject /dev/diskN and remove your USB stick
The USB stick will now be ready to use
IMPORTANT For the step #9 you can use the destination to /dev/rdiskN to reduce the copy time.

NOTE: Sometimes, not always, Step #4 will be necessary. Not all the time. I am not sure why it will add the .dmg ending and other times leave it alone.

NOTE 2: Might I suggest you learn the name of the .iso you downloaded, or just rename it win8.1.iso or something, and put it on your Desktop folder. That way, when you are typing commands like #3 and #4 etc, etc, you can type it like this:

hdiutil convert -format UDRW -o ~/Desktop/win8.1.img ~/Desktop/win8.1.iso
and

mv ~/Desktop/win8.1.img.dmg ~/Desktop/win8.1.img
and step #9 would look like this:

sudo dd if=~/Desktop/win8.1.img of=/dev/diskN bs=1m
IMPORTANT - You can track the progress by pressing CTRL + T It will show the process info and records in and out, since we use the bs=1m each record is 1Mb in size so you can easily track the progress.

I don't mean to be insulting with Note and Note2, I am just making sure that you know what all these commands mean. It's the simplest method. Unless someone else comes up with something better.";s:10:"post_title";s:80:"Create USB install Windows system on OSX without Boot Camp Assitant (Hackintosh)";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:78:"create-usb-install-windows-system-on-osx-without-boot-camp-assitant-hackintosh";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-11-25 16:53:30";s:17:"post_modified_gmt";s:19:"2015-11-25 16:53:30";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://scriptsvn.com/?p=139";s:10:"menu_order";s:2:"10";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:3;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:7:"orgname";s:11:"post_author";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:7:"orgname";s:9:"post_date";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16513;s:4:"type";i:12;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:7:"orgname";s:13:"post_date_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:7:"orgname";s:12:"post_content";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19779;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:7:"orgname";s:10:"post_title";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:80;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:7:"orgname";s:12:"post_excerpt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:7:"orgname";s:11:"post_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:7;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16385;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:7:"orgname";s:14:"comment_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:7:"orgname";s:11:"ping_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:7:"orgname";s:13:"post_password";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:7:"orgname";s:9:"post_name";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:78;s:6:"length";i:800;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:7:"orgname";s:7:"to_ping";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:7:"orgname";s:6:"pinged";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:7:"orgname";s:13:"post_modified";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:7:"orgname";s:17:"post_modified_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:7:"orgname";s:21:"post_content_filtered";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:7:"orgname";s:11:"post_parent";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:7:"orgname";s:4:"guid";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:27;s:6:"length";i:1020;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:7:"orgname";s:10:"menu_order";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:2;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:7:"orgname";s:14:"post_mime_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:7:"orgname";s:13:"comment_count";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:3;s:10:"return_val";i:3;}