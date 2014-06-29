<?php

namespace Browscap\Writer;

use Psr\Log\LoggerInterface;

/**
 * Class WriterInterface
 *
 * @package Browscap\Generator
 */
interface WriterInterface
{
    /**
     * @param string $file
     */
    public function __construct($file);

    /**
     * closes the Writer and the written File
     *
     * @return \Browscap\Writer\WriterInterface
     */
    public function close();

    /**
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @return \Browscap\Writer\WriterInterface
     */
    public function setLogger(LoggerInterface $logger);

    /**
     * @return \Psr\Log\LoggerInterface
     */
    public function getLogger();

    /**
     * Generates a start sequence for the output file
     *
     * @return \Browscap\Writer\WriterInterface
     */
    public function fileStart();

    /**
     * Generates a end sequence for the output file
     *
     * @return \Browscap\Writer\WriterInterface
     */
    public function fileEnd();

    /**
     * Generate the header
     *
     * @param string[] $comments
     *
     * @return \Browscap\Writer\WriterInterface
     */
    public function renderHeader(array $comments = array());

    /**
     * renders the version information
     *
     * @param string[] $versionData
     *
     * @return \Browscap\Writer\WriterInterface
     */
    public function renderVersion(array $versionData = array());

    /**
     * renders the header for a division
     *
     * @param string $division
     *
     * @return \Browscap\Writer\WriterInterface
     */
    public function renderDivisionHeader($division);

    /**
     * renders the header for a section
     *
     * @param string $division
     *
     * @return \Browscap\Writer\WriterInterface
     */
    public function renderSectionHeader($division);

    /**
     * renders the body for a section
     *
     * @param string[] $allProperties
     *
     * @throws \InvalidArgumentException
     * @return \Browscap\Writer\WriterInterface
     */
    public function renderSectionBody(array $allProperties);

    /**
     * renders the footer for a section
     *
     * @return \Browscap\Writer\WriterInterface
     */
    public function renderSectionFooter();

    /**
     * renders the footer for a division
     *
     * @return \Browscap\Writer\WriterInterface
     */
    public function renderDivisionFooter();

    /**
     * @param \Browscap\Formatter\FormatterInterface $formatter
     *
     * @return \Browscap\Writer\WriterInterface
     */
    public function setFormatter(\Browscap\Formatter\FormatterInterface $formatter);

    /**
     * @return \Browscap\Formatter\FormatterInterface
     */
    public function getFormatter();

    /**
     * @param \Browscap\Filter\FilterInterface $filter
     *
     * @return \Browscap\Writer\WriterInterface
     */
    public function setFilter(\Browscap\Filter\FilterInterface $filter);

    /**
     * @return \Browscap\Filter\FilterInterface
     */
    public function getFilter();
}
