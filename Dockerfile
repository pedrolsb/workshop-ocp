FROM registry.access.redhat.com/rhscl/php-70-rhel7

RUN echo "<?php echo \$_SERVER['SERVER_ADDR']; ?>" >> /opt/app-root/src/index.php

RUN echo >> /opt/app-root/src/index.php

RUN echo "<h1>Meu Dockerfile V 3.0</h1>" >> /opt/app-root/src/index.php
RUN echo "<h2>Usando o Dockerfile</h2>" >> /opt/app-root/src/index.php

CMD ["container-entrypoint", "/usr/libexec/s2i/run"]
