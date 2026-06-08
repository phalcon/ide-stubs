#!/usr/bin/env bash
#
# Validate the IDE stubs (Psalm + PHP_CodeSniffer) across every supported
# PHP version using the local docker-compose dev services.
#
# Usage:
#   resources/docker/check-all.sh            # all versions
#   resources/docker/check-all.sh 8.4 8.5    # selected versions
set -u

cd "$(dirname "$0")/../.." || exit 2

versions=("$@")
if [ ${#versions[@]} -eq 0 ]; then
    versions=(8.1 8.2 8.3 8.4 8.5)
fi

declare -A result

for v in "${versions[@]}"; do
    svc="ide-stubs-dev-${v}"
    echo ""
    echo "==================== PHP ${v} ===================="
    if docker compose run --rm "${svc}" bash -lc \
        'composer install --no-interaction --no-progress -q && composer analyze && composer cs'; then
        result[$v]="PASS"
    else
        result[$v]="FAIL"
    fi
done

echo ""
echo "==================== SUMMARY ===================="
status=0
for v in "${versions[@]}"; do
    printf 'PHP %-4s : %s\n' "${v}" "${result[$v]}"
    [ "${result[$v]}" = "PASS" ] || status=1
done
exit "${status}"
