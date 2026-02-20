<?php

namespace src\interfaces;

interface ExportavelInterface
{
    function exportarPDF(): ?string;
    function exportarExcel(): ?string;
}
