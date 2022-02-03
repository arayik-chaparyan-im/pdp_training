pgrep -x chrome >/dev/null && (pgrep -c chrome && echo "chrome process(-es) running") || echo "No chrome process found"
