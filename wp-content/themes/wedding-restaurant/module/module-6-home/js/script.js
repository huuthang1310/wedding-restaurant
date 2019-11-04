left -text $data(-message) \
	    -background $bg
    if {[string compare $data(-icon) ""]} {
	if {([string equal [tk windowingsystem] "classic"]
		|| [string equal [tk windowingsystem] "aqua"])
		|| ([winfo depth $w] < 4) || $tk_strictMotif} {
	    label $w.bitmap -bitmap $data(-icon) -background $bg
	} else {
	    canvas $w.bitmap -width 32 -height 32 -highlightthickness 0 \
		    -background $bg
	    switch $data(-icon) {
		error {
		    $w.bitmap create oval 0 0 31 31 -fill red -outline black
		    $w.bitmap create line 9 9 23 23 -fill white -width 4
		    $w.bitmap create line 9 23 23 9 -fill white -width 4
		}
		info {
		    $w.bitmap create image 0 0 -anchor nw \
			    -image ::tk::dialog::b1
		    $w.bitmap create image 0 0 -anchor nw \
			    -image ::tk::dialog::b2
		    $w.bitmap create image 0 0 -anchor nw \
			    -image ::tk::dialog::i
		}
		question {
		    $w.bitmap create image 0 0 -anchor nw \
			    -image ::tk::dialog::b1
		    $w.bitmap create image 0 0 -anchor nw \
			    -image ::tk::dialog::b2
		    $w.bitmap create image 0 0 -anchor nw \
			    -image ::tk::dialog::q
		}
		default {
		    $w.bitmap create image 0 0 -anchor nw \
			    -image ::tk::dialog::w1
		    $w.bitmap create image 0 0 -anchor nw \
			    -image ::tk::dialog::w2
		    $w.bitmap create image 0 0 -anchor nw \
			    -image ::tk::dialog::w3
		}
	    }
	}
    }
    grid $w.bitmap $w.msg -in $w.top -sticky news -padx 2m -pady 2m
    grid columnconfigure $w.top 1 -weight 1
    grid rowconfigure $w.top 0 -weight 1

    # 5. Create a row of buttons at the bottom of the dialog.

    set i 0
    foreach but $buttons {
	set name [lindex $but 0]
	set opts [lrange $but 1 end]
	if {![llength $opts]} {
	    # Capitalize the first letter of $name
	    set capName [string toupper $name 0]
	    set opts [list -text $capName]
	}

	eval [list tk::AmpWidget button $w.$name -padx 3m] $opts \
		[list -command [list set tk::Priv(button) $name]]

	if {[string equal $name $data(-default)]} {
	    $w.$name configure -default active
	} else {
	    $w.$name configure -default normal
	}
	grid $w.$name -in $w.bot -row 0 -column $i -padx 3m -pady 2m -sticky ew
	grid columnconfigure $w.bot $i -uniform buttons
        incr i

	# create the binding for the key accelerator, based on the underline
	#
        # set underIdx [$w.$name cget -under]
        # if {$underIdx >= 0} {
        #     set key [string index [$w.$name cget -text] $underIdx]
        #     bind $w <Alt-[string tolower $key]>  [list $w.$name invoke]
        #     bind $w <Alt-[string toupper $key]>  [list $w.$name invoke]
        # }
    }
    bind $w <Alt-Key> [list ::tk::AltKeyInDialog $w %A]

    if {[string compare {} $data(-default)]} {
	bind $w <FocusIn> {
	    if {[string equal Button [winfo class %W]]} {
		%W configure -default active
	    }
	}
	bind $w <FocusOut> {
	    if {[string equal Button [winfo class %W]]} {
		%W configure -default normal
	    }
	}
    }

    # 6. Create a binding for <Return> on the dialog

    bind $w <Return> {
	if {[string equal Button [winfo class %W]]} {
	    tk::ButtonInvoke %W
	}
    }

    # 7. Withdraw the window, then update all the geometry information
    # so we know how big it wants to be, then center the window in the
    # display and de-iconify it.

    ::tk::PlaceWindow $w widget $data(-parent)

    # 8. Set a grab and claim the focus too.

    if {[string compare $data(-default) ""]} {
	set focus $w.$data(-default)
    } else {
	set focus $w
    }
    ::tk::SetFocusGrab $w $focus

    # 9. Wait for the user to respond, then restore the focus and
    # return the index of the selected button.  Restore the focus
    # before deleting the window, since otherwise the window manager
    # may take the focus away so we can't redirect it.  Finally,
    # restore any grab that was in effect.

    vwait ::